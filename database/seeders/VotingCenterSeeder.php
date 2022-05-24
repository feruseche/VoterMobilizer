<?php

namespace Database\Seeders;

use App\Models\VotingCenter;
use Illuminate\Database\Seeder;

class VotingCenterSeeder extends Seeder
{
    public function run() : void
    {
        VotingCenter::factory(50)->create();
    }
}
