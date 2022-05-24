<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VoterFactory extends Factory
{
    public function definition() : array
    {
        return [
            "dni"              => $this->faker->numberBetween(50000000,90000000),
            "name"             => $this->faker->name(),
            "lastname"         => $this->faker->lastName(),
            "address"          => $this->faker->address(),
            "mobile"           => $this->faker->phoneNumber(),
            "email"            => $this->faker->email(),
            "sector_id"        => $this->faker->numberBetween(1,20),
            "voting_center_id" => $this->faker->numberBetween(1,50)
        ];
    }
}
