<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'shop name',
                'information' => 'shop info shop info shop info shop info',
                'filename' => 'sample1.jpg',
                'is_selling' => true
            ],
            [
                'owner_id' => 2,
                'name' => 'shop name',
                'information' => 'shop info shop info shop info shop info',
                'filename' => 'sample2.jpg',
                'is_selling' => true
            ],
        ]);
    }
}
