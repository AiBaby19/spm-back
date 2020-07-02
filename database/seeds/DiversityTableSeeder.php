<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DiversityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diversities')->insert([
            'name' => 'winter',
            'enable' => true,
        ]);

        DB::table('diversities')->insert([
            'name' => 'summer',
            'enable' => true,
        ]);
    }
}
