<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Products::factory(5)->create();

        // \App\Models\Products::factory()->create([
        // 'product_name' => 'Shoe Vans',
        // 'description' => '9.5',
        // 'price' => 45,
        // 'quantityinstock' => 23,
        // ]);
    }
}
