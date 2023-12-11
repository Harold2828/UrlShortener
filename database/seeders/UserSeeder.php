<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
        ->count(15)
        ->hasUrls(23)
        ->create();

        User::factory()
        ->count(12)
        ->hasUrls(3)
        ->create();

        User::factory()
        ->count(12)
        ->create();        

        return;
    }
}
