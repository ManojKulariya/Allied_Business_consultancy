<?php

namespace App\Services\Chat;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\HomeSection;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

/**
 * Builds a plain-text digest of the site's own content — services, FAQs,
 * about text, blogs and contact details — used to ground the chatbot's
 * answers. This is the "knowledge base" the AI is instructed to answer
 * from and nothing else.
 *
 * Cached for an hour since content only changes when an admin edits it.
 */
class KnowledgeBaseService
{
    private const CACHE_MINUTES = 60;

    public function digest(): string
    {
        return Cache::remember('chatbot.knowledge-base', self::CACHE_MINUTES * 60, function () {
            return implode("\n\n", array_filter([
                $this->companyInfo(),
                $this->aboutInfo(),
                $this->servicesInfo(),
                $this->faqInfo(),
                $this->blogInfo(),
            ]));
        });
    }

    /** Quick-lookup list of [question, answer] pairs for the keyword-match fallback. */
    public function faqPairs(): array
    {
        return Cache::remember('chatbot.faq-pairs', self::CACHE_MINUTES * 60, function () {
            return Faq::query()->active()->ordered()->get(['question', 'answer'])
                ->map(fn (Faq $faq) => ['question' => $faq->question, 'answer' => strip_tags($faq->answer)])
                ->all();
        });
    }

    /** Service titles + short excerpts, for the keyword-match fallback. */
    public function servicePairs(): array
    {
        return Cache::remember('chatbot.service-pairs', self::CACHE_MINUTES * 60, function () {
            return ServiceCategory::query()->active()->with('activeServices')->get()
                ->flatMap(fn (ServiceCategory $category) => $category->activeServices)
                ->map(fn ($service) => [
                    'title' => $service->title,
                    'excerpt' => strip_tags($service->excerpt ?: Str::limit(strip_tags((string) $service->content), 300)),
                    'url' => route('frontend.services.static', $service->slug),
                ])
                ->all();
        });
    }

    private function companyInfo(): string
    {
        $lines = [
            'COMPANY INFORMATION',
            'Name: '.setting('site_name', 'Allied Business Consultancy'),
            'Tagline: '.setting('site_tagline'),
            'Phone: '.setting('contact_phone'),
            'Email: '.setting('contact_email'),
            'Office Address: '.setting('contact_address'),
            'Business Hours: '.setting('working_hours'),
        ];

        return implode("\n", array_filter($lines));
    }

    private function aboutInfo(): string
    {
        $about = HomeSection::query()->where('section_key', 'about')->first();

        if (! $about) {
            return '';
        }

        $lines = [
            'ABOUT US',
            strip_tags((string) $about->content),
            'Mission: '.$about->dataValue('mission'),
            'Vision: '.$about->dataValue('vision'),
            'Why choose us: '.$about->dataValue('features'),
        ];

        return implode("\n", array_filter($lines));
    }

    private function servicesInfo(): string
    {
        $categories = ServiceCategory::query()->active()->with('activeServices')->ordered()->get();

        if ($categories->isEmpty()) {
            return '';
        }

        $lines = ['SERVICES OFFERED (organised by category)'];

        foreach ($categories as $category) {
            if ($category->activeServices->isEmpty()) {
                continue;
            }

            $lines[] = "\nCategory: {$category->name}";

            foreach ($category->activeServices as $service) {
                $excerpt = strip_tags($service->excerpt ?: Str::limit(strip_tags((string) $service->content), 260));
                $lines[] = "- {$service->title}: {$excerpt}";
            }
        }

        return implode("\n", $lines);
    }

    private function faqInfo(): string
    {
        $faqs = Faq::query()->active()->ordered()->get();

        if ($faqs->isEmpty()) {
            return '';
        }

        $lines = ['FREQUENTLY ASKED QUESTIONS'];

        foreach ($faqs as $faq) {
            $lines[] = "Q: {$faq->question}\nA: ".strip_tags($faq->answer);
        }

        return implode("\n\n", $lines);
    }

    private function blogInfo(): string
    {
        $blogs = Blog::query()->published()->latest('published_at')->limit(15)->get(['title', 'excerpt', 'slug']);

        if ($blogs->isEmpty()) {
            return '';
        }

        $lines = ['BLOG ARTICLES (recommend these when relevant)'];

        foreach ($blogs as $blog) {
            $lines[] = "- {$blog->title}: ".strip_tags((string) $blog->excerpt)." (".route('frontend.blogs.show', $blog).")";
        }

        return implode("\n", $lines);
    }
}
