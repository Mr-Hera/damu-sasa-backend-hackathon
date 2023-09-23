<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\PatientSeeder;
use Database\Seeders\AppointmentSeeder;
use Database\Seeders\PrescriptionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(3)->create();

        User::create([
            'name' => 'Harrison',
            'email' => 'drharrisonwells@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password123',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Sherry',
            'email' => 'sherrykate@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password123',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password123',
            'remember_token' => Str::random(10),
        ]);

        $this->call([
            PatientSeeder::class,
            AppointmentSeeder::class,
            PrescriptionSeeder::class,
        ]);
    }
}
