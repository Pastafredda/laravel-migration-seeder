<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Railway>
 */
class RailwayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'agency' => fake() -> company(),
            'start_station' => fake() -> streetName() ,
            'arrival_station' => fake() -> streetName(),
            'departure_time' => fake() -> time(),
            'arrival_time' => fake() -> time(),
            'train_code' => fake() -> numerify('#####'),
            'carriages' => fake() -> numberBetween(0, 20),
            'in_time' => fake() ->boolean(),
            'deleted' => fake() ->boolean()
        ];
    }
}
