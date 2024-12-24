<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assets = [
            ['name' => 'Mouse', 'status' => '1'],
            ['name' => 'Keyboard', 'status' => '1'],
            ['name' => 'Monitor', 'status' => '1'],
            ['name' => 'CPU', 'status' => '1'],
            ['name' => 'Water bottle', 'status' => '1'],
            ['name' => 'Tissue paper', 'status' => '1'],
            ['name' => 'Table fan', 'status' => '0'],
        ];

        DB::table('assets')->insert($assets);
    }
}