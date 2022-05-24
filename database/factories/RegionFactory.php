<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegionFactory extends Factory
{
    public function definition() : array
    {
        return [
            "name"   => $this->faker->city(),
            "leader" => $this->faker->name(),
            "email"  => $this->faker->email(),
            "mobile" => $this->faker->phoneNumber()
        ];
    }
}
