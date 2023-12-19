<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{

    public function run(): void
    {
        $student = collect([
            [
                'name' => 'Shazmeen',
                'email' => 'shaz@gmail.com'
            ], [
                'name' => 'Sufyan',
                'email' => 'sufyan@gmail.com'
            ], [
                'name' => 'Shahan',
                'email' => 'shahan@gmail.com'
            ]
        ]
        );
        $student->each(function ($students) {
            student::insert($students);
        });


        // student::create([
        //     'name' => 'Shazmeen',
        //     'email' => 'shazmeen@gmail.com'
        // ]);
    }
}
