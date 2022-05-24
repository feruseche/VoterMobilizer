<?php

namespace Database\Seeders;

use App\Models\Mobilizer;
use Illuminate\Database\Seeder;

class MobilizerSeeder extends Seeder
{
    public function run() : void
    {
        Mobilizer::factory(100)->create();
    }
}
