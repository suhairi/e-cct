<?php

use Illuminate\Database\Seeder;
use App\Wilayah;

class WilayahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wilayah::create([
        	'code'	=> '1',
        	'name'	=> 'Wilayah 1'
    	]);

    	Wilayah::create([
        	'code'	=> '2',
        	'name'	=> 'Wilayah 2'
    	]);

    	Wilayah::create([
        	'code'	=> '3',
        	'name'	=> 'Wilayah 3'
    	]);

    	Wilayah::create([
        	'code'	=> '4',
        	'name'	=> 'Wilayah 4'
    	]);

    }
}
