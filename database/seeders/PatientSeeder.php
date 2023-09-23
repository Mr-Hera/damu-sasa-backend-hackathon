<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            'first_name' => 'John',
            'other_name' => 'Doe',
            'email' => 'johndoe@gmail.com',
            'phone_number' => '0712345678',
            'address' => 'mbagathi way',
        ]);
        Patient::create([
            'first_name' => 'Marry',
            'other_name' => 'Jane',
            'email' => 'maryjane@gmail.com',
            'phone_number' => '0732145678',
            'address' => 'lavington',
        ]);
        Patient::create([
            'first_name' => 'Jack',
            'other_name' => 'Qwesi',
            'email' => 'jackqwesi@gmail.com',
            'phone_number' => '0787654321',
            'address' => 'imara daima',
        ]);
    }
}
