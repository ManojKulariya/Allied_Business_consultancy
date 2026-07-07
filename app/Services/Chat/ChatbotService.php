<?php

namespace App\Services\Chat;

use Illuminate\Support\Str;

/**
 * Orchestrates a chat turn: try Gemini (grounded in the site's knowledge
 * base), fall back to simple keyword matching against FAQs/services if
 * Gemini is unavailable or fails, and fall back to the fixed message as
 * a last resort — so the widget always responds politely even with zero
 * AI configuration.
 */
class ChatbotService
{
    /** Words too common to be useful for keyword matching. */
    private const STOPWORDS = [
        'the', 'and', 'for', 'are', 'you', 'your', 'what', 'how', 'can', 'does', 'with',
        'about', 'this', 'that', 'have', 'need', 'want', 'please', 'tell', 'me', 'i', 'a',
        'is', 'it', 'to', 'of', 'in', 'on', 'do', 'my', 'we', 'us', 'our',
    ];

    private const INTENT_KEYWORDS = [
        'call me', 'contact me', 'book', 'consultation', 'quote', 'price', 'cost',
        'talk to expert', 'talk to an expert', 'register', 'get started', 'sign up',
        'hire', 'apply', 'proceed', 'interested in', 'want to start',
    ];

    public function __construct(
        private readonly GeminiService $gemini,
        private readonly KnowledgeBaseService $knowledgeBase,
    ) {
    }

    /**
     * @param  array<int, array{role: string, text: string}>  $history
     * @return array{reply: string, offer_lead_form: bool, is_fallback: bool}
     */
    public function respond(array $history, string $message): array
    {
        $reply = $this->gemini->reply($this->knowledgeBase->digest(), $history, $message)
            ?? $this->keywordMatch($message)
            ?? $this->fallbackMessage();

        return [
            'reply' => $reply,
            'offer_lead_form' => (bool) setting('chat_lead_form_enabled', '1') && $this->detectsBuyingIntent($message),
            'is_fallback' => $reply === $this->fallbackMessage(),
        ];
    }

    public function fallbackMessage(): string
    {
        return (string) setting(
            'chat_fallback_message',
            'Thank you for your question. One of our consultants can guide you personally. Please call us at '.setting('contact_phone').' or submit the contact form.'
        );
    }

    /**
     * Very light scoring: count significant shared words between the
     * message and each FAQ question / service title+excerpt, return the
     * best match above a minimum threshold.
     */
    private function keywordMatch(string $message): ?string
    {
        $words = $this->significantWords($message);

        if (empty($words)) {
            return null;
        }

        $best = ['score' => 0, 'answer' => null];

        foreach ($this->knowledgeBase->faqPairs() as $faq) {
            $score = $this->overlapScore($words, $this->significantWords($faq['question']));

            if ($score > $best['score']) {
                $best = ['score' => $score, 'answer' => $faq['answer']];
            }
        }

        foreach ($this->knowledgeBase->servicePairs() as $service) {
            $score = $this->overlapScore($words, $this->significantWords($service['title'].' '.$service['excerpt']));

            if ($score > $best['score']) {
                $best = [
                    'score' => $score,
                    'answer' => "{$service['excerpt']} You can read more here: {$service['url']}",
                ];
            }
        }

        return $best['score'] >= 2 ? $best['answer'] : null;
    }

    private function significantWords(string $text): array
    {
        return collect(preg_split('/[^a-z0-9]+/i', strtolower($text)))
            ->filter(fn ($word) => strlen($word) >= 3 && ! in_array($word, self::STOPWORDS, true))
            ->unique()->values()->all();
    }

    private function overlapScore(array $wordsA, array $wordsB): int
    {
        return count(array_intersect($wordsA, $wordsB));
    }

    private function detectsBuyingIntent(string $message): bool
    {
        $message = strtolower($message);

        foreach (self::INTENT_KEYWORDS as $keyword) {
            if (Str::contains($message, $keyword)) {
                return true;
            }
        }

        return false;
    }
}
