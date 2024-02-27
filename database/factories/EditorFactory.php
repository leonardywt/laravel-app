<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Editor>
 */
class EditorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => 'editor@gmail.com',
            'password' => '$2y$12$vtpAYwOh1ptSUJSshksJY.9POJckRBHi7y/MAyXpFGAJYoKtJSGZi',
            'name' => 'editor'
        ];
    }
}
