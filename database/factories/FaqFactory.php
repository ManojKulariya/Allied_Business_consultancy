<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Faq>
 */
class FaqFactory extends Factory
{
    protected $model = Faq::class;

    public function definition(): array
    {
        return [
            'question' => rtrim(fake()->unique()->sentence(8), '.').'?',
            'answer' => '<p>'.fake()->paragraph(3).'</p>',
            'category' => fake()->randomElement(['General', 'Services', 'Pricing', 'Support']),
            'status' => 1,
            'sort_order' => fake()->numberBetween(0, 100),
        ];
    }
}
