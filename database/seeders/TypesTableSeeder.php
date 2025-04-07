<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Frontend',
                'description' => 'Progetti relativi all’interfaccia utente e all’esperienza utente.'
            ],
            [
                'name' => 'Backend',
                'description' => 'Progetti focalizzati sulla logica di business e gestione del database.'
            ],
            [
                'name' => 'Full Stack',
                'description' => 'Progetti che combinano sia frontend che backend.'
            ],
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type['name'];
            $newType->description = $type['description'];
            $newType->save();
            
        }
    }
}
