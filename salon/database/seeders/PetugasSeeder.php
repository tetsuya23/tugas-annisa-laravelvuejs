<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) {
            $petugas = new Petugas;

            $petugas->name = $faker->name;
            $petugas->email = $faker->email;
            $petugas->no_hp = '08'.$faker->randomNumber(10);
            $petugas->address = $faker->address;

            $petugas->save();

        }
    }
}
