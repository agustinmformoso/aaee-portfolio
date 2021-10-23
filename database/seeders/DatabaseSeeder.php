<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Skill;
use App\Models\Education;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Skill::factory(15)->create();
        Education::factory(18)->create();
    }
}
