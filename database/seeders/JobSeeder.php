<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(10)->create();
        Job::factory(5)->recycle(Employer::factory()->create())->create();
        Job::factory()->withEmployer(Employer::first()->id)->create();
    }
}
