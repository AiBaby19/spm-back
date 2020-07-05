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
        DB::table('item_diversity')->insert([
            'item_id' => 1,
            'diversity_id' => 1,
        ]);

        DB::table('item_diversity')->insert([
            'item_id' => 12,
            'diversity_id' => 5,
        ]);

        DB::table('item_diversity')->insert([
            'item_id' => 13,
            'diversity_id' => 5,
        ]);

        DB::table('item_diversity')->insert([
            'item_id' => 13,
            'diversity_id' => 4,
        ]);
    }
}
