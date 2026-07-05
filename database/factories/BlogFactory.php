<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        $title = fake()->unique()->sentence(6);

        return [
            'blog_category_id' => BlogCategory::factory(),
            'title' => rtrim($title, '.'),
            'slug' => Str::slug($title),
            'excerpt' => fake()->paragraph(),
            'content' => '<p>'.implode('</p><p>', fake()->paragraphs(6)).'</p>',
            'tags' => fake()->words(4),
            'views' => fake()->numberBetween(0, 5000),
            'is_featured' => fake()->boolean(20),
            'published_at' => fake()->dateTimeBetween('-1 year'),
            'status' => 1,
        ];
    }

    public function featured(): static
    {
        return $this->state(fn () => ['is_featured' => true]);
    }

    public function draft(): static
    {
        return $this->state(fn () => ['published_at' => null, 'status' => 0]);
    }
}
