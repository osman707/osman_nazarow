<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = Location::pluck('id')->toArray();
        $classrooms = [
            ['name' => 'A1', 'location_id' => $locations[array_rand($locations)]],
            ['name' => 'B3', 'location_id' => $locations[array_rand($locations)]],
            ['name' => 'C7', 'location_id' => $locations[array_rand($locations)]],
            ['name' => 'D5', 'location_id' => $locations[array_rand($locations)]],
            ['name' => 'D4', 'location_id' => $locations[array_rand($locations)]],
            ['name' => 'A5', 'location_id' => $locations[array_rand($locations)]],
            ['name' => 'A10', 'location_id' => $locations[array_rand($locations)]],
            ['name' => 'B13', 'location_id' => $locations[array_rand($locations)]],
            ['name' => 'B2', 'location_id' => $locations[array_rand($locations)]],
            ['name' => 'A4', 'location_id' => $locations[array_rand($locations)]],
        ];

        foreach ($classrooms as $classroomData) {
            Classroom::create([
                'name' => $classroomData['name'],
                'location_id' => $classroomData['location_id'],
            ]);
        }
    }
}
