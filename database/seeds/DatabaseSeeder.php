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
        $this->call(UsersTableSeeder::class);
        $this->call(WilayahTableSeeder::class);
        $this->call(LokalitiTableSeeder::class);
        $this->call(KaedahTanamTableSeeder::class);
    }
}
