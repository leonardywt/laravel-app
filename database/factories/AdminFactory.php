<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => 'admin@gmail.com',
            'password' => '$2y$12$EE/D6fi6YFrsSoZ2v9ITpehJuQe2SPdAy/UO/wbbZTIhc9w8uYygW',
            'name' => 'leo'
        ];
    }
}
