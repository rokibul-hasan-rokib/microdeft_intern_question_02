<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RequisitionsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('requisitions')->insert([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'asset_id' => rand(1, 10),
                'designation' => $faker->jobTitle,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}