<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'region' => 'Tanzania',
            'email' => 'mosses608@gmail.com',
            'password' => '1234567890',
            'trade_role' => '1',
            'company_name' => '',
            'full_name' => 'Mosses Mosses',
            'contact' => '0689560001',
            'term_policy' => '1',
        ]);

        User::create([
            'region' => 'Tanzania',
            'email' => 'monalisa@gmail.com',
            'password' => '1234567890',
            'trade_role' => '2',
            'company_name' => 'Monalisa Supplier',
            'full_name' => '',
            'contact' => '0768272955',
            'term_policy' => '1',
        ]);
    }
}
