<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::create([
            'name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'course' => 'BSIT'
        ]);

        Student::create([
            'name' => 'Maria Santos',
            'email' => 'maria@example.com',
            'course' => 'BSCS'
        ]);

        Student::create([
            'name' => 'Pedro Reyes',
            'email' => 'pedro@example.com',
            'course' => 'BSIS'
        ]);
    }
}