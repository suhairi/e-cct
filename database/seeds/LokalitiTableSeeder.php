<?php

use Illuminate\Database\Seeder;
use App\Lokaliti;

class LokalitiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//############## WILAYAH 1 ################

        Lokaliti::create([
        	'code'			=> 'A1',
        	'name'			=> strtoupper('pertubuhan peladang kawasan A1'),
        	'wilayah_id'	=> 1
    	]);

    	Lokaliti::create([
        	'code'			=> 'B1',
        	'name'			=> strtoupper('pertubuhan peladang kawasan B1'),
        	'wilayah_id'	=> 1
    	]);

    	Lokaliti::create([
        	'code'			=> 'C1',
        	'name'			=> strtoupper('pertubuhan peladang kawasan C1'),
        	'wilayah_id'	=> 1
    	]);

    	Lokaliti::create([
        	'code'			=> 'D1',
        	'name'			=> strtoupper('pertubuhan peladang kawasan D1'),
        	'wilayah_id'	=> 1
    	]);

    	Lokaliti::create([
        	'code'			=> 'E1',
        	'name'			=> strtoupper('pertubuhan peladang kawasan E1'),
        	'wilayah_id'	=> 1
    	]);


    	//############## WILAYAH 2 ################
    	
        Lokaliti::create([
        	'code'			=> 'A2',
        	'name'			=> strtoupper('pertubuhan peladang kawasan A2'),
        	'wilayah_id'	=> 2
    	]);

        Lokaliti::create([
        	'code'			=> 'B2',
        	'name'			=> strtoupper('pertubuhan peladang kawasan B2'),
        	'wilayah_id'	=> 2
    	]);

        Lokaliti::create([
        	'code'			=> 'C2',
        	'name'			=> strtoupper('pertubuhan peladang kawasan C2'),
        	'wilayah_id'	=> 2
    	]);

        Lokaliti::create([
        	'code'			=> 'D2',
        	'name'			=> strtoupper('pertubuhan peladang kawasan D2'),
        	'wilayah_id'	=> 2
    	]);

        Lokaliti::create([
        	'code'			=> 'E2',
        	'name'			=> strtoupper('pertubuhan peladang kawasan E2'),
        	'wilayah_id'	=> 2
    	]);

        Lokaliti::create([
        	'code'			=> 'F2',
        	'name'			=> strtoupper('pertubuhan peladang kawasan F2'),
        	'wilayah_id'	=> 2
    	]);

        Lokaliti::create([
        	'code'			=> 'G2',
        	'name'			=> strtoupper('pertubuhan peladang kawasan G2'),
        	'wilayah_id'	=> 2
    	]);

    	Lokaliti::create([
        	'code'			=> 'H2',
        	'name'			=> strtoupper('pertubuhan peladang kawasan H2'),
        	'wilayah_id'	=> 2
    	]);

    	Lokaliti::create([
        	'code'			=> 'I2',
        	'name'			=> strtoupper('pertubuhan peladang kawasan I2'),
        	'wilayah_id'	=> 2
    	]);


    	//############## WILAYAH 3 ################
    	
        Lokaliti::create([
        	'code'			=> 'A3',
        	'name'			=> strtoupper('pertubuhan peladang kawasan A3'),
        	'wilayah_id'	=> 3
    	]);

    	Lokaliti::create([
        	'code'			=> 'B3',
        	'name'			=> strtoupper('pertubuhan peladang kawasan B3'),
        	'wilayah_id'	=> 3
    	]);

    	Lokaliti::create([
        	'code'			=> 'C3',
        	'name'			=> strtoupper('pertubuhan peladang kawasan C3'),
        	'wilayah_id'	=> 3
    	]);

    	Lokaliti::create([
        	'code'			=> 'D3',
        	'name'			=> strtoupper('pertubuhan peladang kawasan D3'),
        	'wilayah_id'	=> 3
    	]);

    	Lokaliti::create([
        	'code'			=> 'E3',
        	'name'			=> strtoupper('pertubuhan peladang kawasan E3'),
        	'wilayah_id'	=> 3
    	]);

    	Lokaliti::create([
        	'code'			=> 'F3',
        	'name'			=> strtoupper('pertubuhan peladang kawasan F3'),
        	'wilayah_id'	=> 3
    	]);



    	//############## WILAYAH 4 ################
    	
        Lokaliti::create([
        	'code'			=> 'A4',
        	'name'			=> strtoupper('pertubuhan peladang kawasan A4'),
        	'wilayah_id'	=> 4
    	]);

    	Lokaliti::create([
        	'code'			=> 'B4',
        	'name'			=> strtoupper('pertubuhan peladang kawasan B4'),
        	'wilayah_id'	=> 4
    	]);

    	Lokaliti::create([
        	'code'			=> 'C4',
        	'name'			=> strtoupper('pertubuhan peladang kawasan C4'),
        	'wilayah_id'	=> 4
    	]);

    	Lokaliti::create([
        	'code'			=> 'D4',
        	'name'			=> strtoupper('pertubuhan peladang kawasan D4'),
        	'wilayah_id'	=> 4
    	]);

    	Lokaliti::create([
        	'code'			=> 'E4',
        	'name'			=> strtoupper('pertubuhan peladang kawasan E4'),
        	'wilayah_id'	=> 4
    	]);

    	Lokaliti::create([
        	'code'			=> 'F4',
        	'name'			=> strtoupper('pertubuhan peladang kawasan F4'),
        	'wilayah_id'	=> 4
    	]);

    	Lokaliti::create([
        	'code'			=> 'G4',
        	'name'			=> strtoupper('pertubuhan peladang kawasan G4'),
        	'wilayah_id'	=> 4
    	]);

    }
}
