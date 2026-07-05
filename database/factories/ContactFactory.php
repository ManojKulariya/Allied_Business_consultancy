<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contact>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'subject' => fake()->sentence(5),
            'message' => fake()->paragraph(3),
            'is_read' => fake()->boolean(40),
            'ip_address' => fake()->ipv4(),
            'created_at' => fake()->dateTimeBetween('-6 months'),
        ];
    }
}
