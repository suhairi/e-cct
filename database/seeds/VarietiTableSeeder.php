<?php

use Illuminate\Database\Seeder;

class VarietiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        App\Varieti::create([
            'code'  => 'MR219',
            'name'  => 'MR219'
        ]);

        App\Varieti::create([
            'code'  => 'MR218',
            'name'  => 'MR218'
        ]);

        App\Varieti::create([
            'code'  => 'MR217',
            'name'  => 'MR217'
        ]);

    }
}
