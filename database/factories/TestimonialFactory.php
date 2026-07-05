<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Testimonial>
 */
class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'designation' => fake()->jobTitle(),
            'company' => fake()->company(),
            'content' => fake()->paragraph(3),
            'rating' => fake()->numberBetween(4, 5),
            'status' => 1,
            'sort_order' => fake()->numberBetween(0, 100),
        ];
    }
}
