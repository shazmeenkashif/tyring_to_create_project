<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $users = collect([
            [
                'name' => 'sana',
                'email' => 'sana@gmail.com',
                'age' => 18,
                'city' => 'canada'
            ],
            ['name' => 'iqra',
                'email' => 'iqra@gmail.com',
                'age' => 17,
                'city' => 'uk'],
            ['name' => 'Shazmeen',
                'email' => 'shaz@gmail.com',
                'age' => 18,
                'city' => 'Us'],
            ['name' => 'ayesha',
                'email' => 'ayesha@gmail.com',
                'age' => 19,
                'city' => 'hijaz'],
            ['name' => 'fatima',
                'email' => 'fatima@gmail.com',
                'age' => 20,
                'city' => 'sialkot'],
            ['name' => 'noor',
                'email' => 'noor@gmail.com',
                'age' => 25,
                'city' => 'gujrat'],
            ['name' => 'khansa',
                'email' => 'khansa@gmail.com',
                'age' => 20,
                'city' => 'murree'],
            ['name' => 'shahan',
                'email' => 'shahan@gmail.com',
                'age' => 34,
                'city' => 'gujranwala'],
            ['name' => 'sufyan',
                'email' => 'sufyan@gmail.com',
                'age' => 12,
                'city' => 'lahore'],
            ['name' => 'dolly',
                'email' => 'dolly@gmail.com',
                'age' => 18,
                'city' => 'islamabad']
        ]);
        $users->each(function ($user) {
            user::insert($user);
        });
    }



}
