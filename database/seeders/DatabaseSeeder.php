<?php

namespace Database\Seeders;

use App\Models\Mobilizer;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Sector;
use App\Models\Voter;
use App\Models\VotingCenter;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        User::factory(10)->create();
        Region::factory(10)->create();
        Sector::factory(20)->create();
        VotingCenter::factory(50)->create();
        Voter::factory(1000)->create();
        Mobilizer::factory(100)->create();
    }
}
