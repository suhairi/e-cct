<?php

use Illuminate\Database\Seeder;
use App\KaedahTanam;

class KaedahTanamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KaedahTanam::create([
            'code'  => 'TTB',
            'name'  => strtoupper('tabur terus basah')
        ]);

        KaedahTanam::create([
            'code'  => 'TTK',
            'name'  => strtoupper('tabur terus kering')
        ]);

        KaedahTanam::create([
            'code'  => 'TDA',
            'name'  => strtoupper('tabur dalam air')
        ]);
    }
}
