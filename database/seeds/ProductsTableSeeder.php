<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 15 product records
        for ($i = 0; $i < 15; $i++) {
            Product::create([
                'name' => $faker->name,
                'price' => $faker->randomNumber(2),
                'quantity' => $faker->randomNumber(2),
                'size' => $faker->randomNumber(3),
                'code' => $faker->randomNumber(4),
            ]);
        }
    }
}
