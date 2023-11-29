<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'empid' => Str::random(10),
            'lastname' => 'Barriga',
            'firstname' => 'Rey Mark',
            'middlename' => 'Cajes',
            'password' => Hash::make('password'),
            'status' => 'Single',
            'datehired' => '2023/11/28',
            'salary' => 1000.00,
            'notes' => 'No notes',
            'remark' => 'No remarks',
        ]);
    }
}
