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
        $products = [
            [
                "pro_name" => "Coca",
                "pro_qty" => 3,
                "pro_price" => 2.10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "pro_name" => "Sting",
                "pro_qty" => 5,
                "pro_price" => 1.10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "pro_name" => "Water",
                "pro_qty" => 7,
                "pro_price" => 5.10,
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        DB::table("products")->insert($products);
    }
}
