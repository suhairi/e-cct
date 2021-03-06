<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
			'name' => strtoupper('Suhairi Abdul Hamid'),
			'email' => 'suhairi81@gmail.com',
			'password' => bcrypt("suhairi"),
            'level' => strtoupper('admin')
		]);

        factory('App\User', 35)->create();
    }
}
