<?php

namespace Database\Seeders;

use App\Models\Sale;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) {
            $categori = new Sale;

            $categori->price = rand(25000,350000);
            $categori->title = $faker->name;
            $categori->year = rand(2023,2026);

            $categori->petugas_id = rand(1,10);
            $categori->categori_id = rand(1,10);
            
            $categori->save();

        }
    }
}
