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
                "pro_qty" => 10,
                "pro_price" => 1.00,
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "pro_name" => "Vital",
                "pro_qty" => 20,
                "pro_price" => 1.50,
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "pro_name" => "Red Sting",
                "pro_qty" => 2,
                "pro_price" => 2.00,
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "pro_name" => "Yellow Sting",
                "pro_qty" => 10,
                "pro_price" => 1.00,
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "pro_name" => "Milk",
                "pro_qty" => 5,
                "pro_price" => 1.30,
                "created_at" => now(),
                "updated_at"=> now(),
            ],
        ];

        DB::table("products")->insert($products);
    }
}
