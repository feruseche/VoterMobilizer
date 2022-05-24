<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SectorFactory extends Factory
{
    public function definition() : array
    {
        return [
            "name"      => $this->faker->city(),
            "leader"    => $this->faker->name(),
            "email"     => $this->faker->email(),
            "mobile"    => $this->faker->phoneNumber(),
            "region_id" => $this->faker->numberBetween(1,10)
        ];
    }
}