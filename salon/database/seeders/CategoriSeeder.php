<?php

namespace Database\Seeders;

use App\Models\Categori;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) {
            $categori = new Categori;

            $categori->name = $faker->name;
            
            $categori->save();

        }
    }
}
