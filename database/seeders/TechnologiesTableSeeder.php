<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['name' => 'PHP', 'color' => '#4F5B93'],
            ['name' => 'Laravel', 'color' => '#FF2D55'],
            ['name' => 'JavaScript', 'color' => '#F7DF1E'],
            ['name' => 'Vue.js', 'color' => '#4FC08D'],
            ['name' => 'React', 'color' => '#61DAFB'],
            ['name' => 'Node.js', 'color' => '#8CC84B'],
            ['name' => 'MySQL', 'color' => '#4479A1'],
            ['name' => 'PostgreSQL', 'color' => '#336791'],
            ['name' => 'MongoDB', 'color' => '#47A248'],
            ['name' => 'Redis', 'color' => '#D82C20'],
        ];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology['name'];
            $newTechnology->color = $technology['color'];
            $newTechnology->save();
        }
    }
}
