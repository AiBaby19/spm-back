<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientDiversityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients_diversities')->insert([
            'client_id' => 10,
            'diversity_id' => 5,
        ]);

        DB::table('clients_diversities')->insert([
            'client_id' => 12,
            'diversity_id' => 5,
        ]);

        DB::table('clients_diversities')->insert([
            'client_id' => 13,
            'diversity_id' => 5,
        ]);

        DB::table('clients_diversities')->insert([
            'client_id' => 13,
            'diversity_id' => 2,
        ]);
    }
}
