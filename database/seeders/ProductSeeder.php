<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'judul' => 'Product 1',
                'deskripsi' => 'Deskripsi untuk Product 1',
                'harga' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
