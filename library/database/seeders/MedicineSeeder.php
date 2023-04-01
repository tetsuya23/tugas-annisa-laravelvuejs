<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i <20; $i++) {
            $medicine = new Medicine;

            $medicine->name = $faker->name;
            $medicine->expired = $faker->name;

            $medicine->save();
        }
    }
}
