<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Team>
 */
class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition(): array
    {
        $name = fake()->unique()->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'designation' => fake()->jobTitle(),
            'bio' => fake()->paragraph(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'social_links' => [
                'linkedin' => 'https://linkedin.com/in/'.Str::slug($name),
                'twitter' => 'https://twitter.com/'.Str::slug($name),
            ],
            'status' => 1,
            'sort_order' => fake()->numberBetween(0, 100),
        ];
    }
}
