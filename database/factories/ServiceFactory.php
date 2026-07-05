<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $title = fake()->unique()->words(3, true);

        return [
            'service_category_id' => ServiceCategory::factory(),
            'title' => Str::title($title),
            'slug' => Str::slug($title),
            'excerpt' => fake()->paragraph(),
            'content' => '<p>'.implode('</p><p>', fake()->paragraphs(5)).'</p>',
            'icon' => 'bi-graph-up-arrow',
            'is_featured' => fake()->boolean(30),
            'status' => 1,
            'sort_order' => fake()->numberBetween(0, 100),
        ];
    }
}
