<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VotingCenterFactory extends Factory
{
    public function definition() : array
    {
        return [
            "code"             => $this->faker->numberBetween(1000000,1000500),
            "name"             => "School " . $this->faker->name(),
            "address"          => $this->faker->address(),
            "region_id"        => $this->faker->numberBetween(1,10)
        ];
    }
}