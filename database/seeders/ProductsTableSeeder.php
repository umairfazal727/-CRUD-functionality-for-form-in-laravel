<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 40; $i++) {
            DB::table('products')->insert([
                'user_id' => 1,
                'name' => 'Product ' . $i,
                'description' => 'Description for Product ' . $i,
                'price' => rand(10, 100),
                'quantity' => rand(1, 20),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
