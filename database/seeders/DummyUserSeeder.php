<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$userData = [
    ['name' => 'Mas Operator','email' => 'operator@gmail.com','role' => 'operator','password' => bcrypt('123456')],
    ['name' => 'Mas Keuangan','email' => 'keuangan@gmail.com','role' => 'keuangan','password' => bcrypt('123456')],
    ['name' => 'Mas Marketing','email' => 'marketing@gmail.com','role' => 'marketing','password' => bcrypt('123456')],
    ];

    DB::table('users')->insert($userData);


    }
}
