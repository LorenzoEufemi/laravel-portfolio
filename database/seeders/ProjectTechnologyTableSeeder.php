<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;

class ProjectTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        $technologies = Technology::all();
        
        foreach ($projects as $project) {
            $randomTechIds = $technologies->random(rand(1, $technologies->count()))->pluck('id');
            $project->technologies()->attach($randomTechIds);
        }
    }
}

    