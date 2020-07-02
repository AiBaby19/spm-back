<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemDiversityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_diversities')->insert([
            'item_id' => 10,
            'diversity_id' => 5,
        ]);

        DB::table('items_diversities')->insert([
            'item_id' => 12,
            'diversity_id' => 5,
        ]);

        DB::table('items_diversities')->insert([
            'item_id' => 13,
            'diversity_id' => 5,
        ]);

        DB::table('items_diversities')->insert([
            'item_id' => 13,
            'diversity_id' => 4,
        ]);
    }
}
