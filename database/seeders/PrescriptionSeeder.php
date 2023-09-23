<?php

namespace Database\Seeders;

use App\Models\Prescription;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prescription::create([
            'medicine_name' => 'Azothromycin',
            'dosage' => '1 x 3',
            'duration' => '3 days',
            'instructions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magnam.',
            'appointment_id' => 1,
        ]);
        Prescription::create([
            'medicine_name' => 'Brufen',
            'dosage' => '1 x 5',
            'duration' => '5 days',
            'instructions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magnam.',
            'appointment_id' => 2,
        ]);
        Prescription::create([
            'medicine_name' => 'Augumentine',
            'dosage' => '1 x 3',
            'duration' => '3 days',
            'instructions' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magnam.',
            'appointment_id' => 3,
        ]);
    }
}
