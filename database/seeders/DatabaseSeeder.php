<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Category;
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
            'email' => 'mosses6080@gmail.com',
            'password' => '1234567890',
            'trade_role' => '1',
            'company_name' => '',
            'full_name' => 'Mosses Mosses',
            'contact' => '0689560002',
            'term_policy' => '1',
        ]);

        User::create([
            'region' => 'Tanzania',
            'email' => 'monalisaa@gmail.com',
            'password' => '1234567890',
            'trade_role' => '2',
            'company_name' => 'Monalisa Supplier',
            'full_name' => '',
            'contact' => '0768272950',
            'term_policy' => '1',
        ]);

        Role::create([
            'role_name' => 'Buyer',
        ]);

        Role::create([
            'role_name' => 'Seller',
        ]);

        Category::create([
            'category_name' => 'Babies Fashion',
        ]);

        Category::create([
            'category_name' => 'Bags',
        ]);

        Category::create([
            'category_name' => 'Beauty & Personal Care',
        ]);

        Category::create([
            'category_name' => 'Books',
        ]);

        Category::create([
            'category_name' => 'Computers',
        ]);

        Category::create([
            'category_name' => 'Electronics',
        ]);
        
        Category::create([
            'category_name' => 'Ladies Fashion',
        ]);

        Category::create([
            'category_name' => 'Men Fashions',
        ]);

        Category::create([
            'category_name' => 'Home & Kitchen',
        ]);

        Category::create([
            'category_name' => 'Shoes',
        ]);

        Category::create([
            'category_name' => 'Spare Parts',
        ]);

        Category::create([
            'category_name' => 'Sports & Outdoors',
        ]);

        Category::create([
            'category_name' => 'Software',
        ]);
    }
}
