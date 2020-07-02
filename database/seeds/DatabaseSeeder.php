<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(DiversityTableSeeder::class);
        $this->call(ClientDiversityTableSeeder::class);
        $this->call(ItemDiversityTableSeeder::class);
    }
}
