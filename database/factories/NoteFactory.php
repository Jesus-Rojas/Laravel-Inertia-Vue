<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    public function definition()
    {
        return [
            'excerpt' => $this->faker->text(140),
            'content' => $this->faker->text(1200),
        ];
    }
}
