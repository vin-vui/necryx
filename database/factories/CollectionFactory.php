<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collection>
 */
class CollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this -> faker->unique()-> word(),
            'types' => $this -> faker -> randomElement(['jeu', 'art', 'concept']),
            'content' => $this -> faker -> paragraph(),
            'image'=> '',
            'number_players'=> $this -> faker -> numberBetween(1,6),
            'duration' => $this -> faker -> randomDigit(),
            'age' => $this -> faker -> numberBetween(8,18),
            'origin'=> $this -> faker -> sentence(),
            'example'=> $this -> faker -> paragraph(),
        ];
    }
}
