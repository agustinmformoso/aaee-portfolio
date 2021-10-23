<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Service;
use App\Models\Rrss;
use App\Models\Project;

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
        Service::factory(18)->create();
        Rrss::factory(18)->create();
        Project::factory(18)->create();
    }
}
