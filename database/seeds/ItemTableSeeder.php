<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('items')->insert([
                'name' => Str::random(5),
                'catalog_number' => Str::random(5),
                'price' => 10,
                'has_vat' => false,
                'enable' => true,
            ]);
        }
    }
}
