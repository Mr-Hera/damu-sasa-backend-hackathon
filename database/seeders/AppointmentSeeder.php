<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::create([
            'start_time' => 'September 23, 11am',
            'end_time' => 'September 23, 2pm',
            'comments' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magnam.',
            'patient_id' => 1,
        ]);

        Appointment::create([
            'start_time' => 'October 12, 9am',
            'end_time' => 'October 12, 10am',
            'comments' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magnam.',
            'patient_id' => 1,
        ]);

        Appointment::create([
            'start_time' => 'December 5, 4pm',
            'end_time' => 'December 5, 6pm',
            'comments' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magnam.',
            'patient_id' => 2,
        ]);

        Appointment::create([
            'start_time' => 'October 9, 9am',
            'end_time' => 'October 9, 10am',
            'comments' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magnam.',
            'patient_id' => 3,
        ]);

        Appointment::create([
            'start_time' => 'September 24, 11am',
            'end_time' => 'September 24, 2pm',
            'comments' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magnam.',
            'patient_id' => 3,
        ]);
    }
}
