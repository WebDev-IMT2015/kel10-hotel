<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Jeff',
        	'username' => 'matemo22',
        	'password' => bcrypt('asdf'),
        	'authentication' => '1',
    	]);

    	DB::table('users')->insert([
        	'name' => 'Alvin',
        	'username' => 'atan',
        	'password' => bcrypt('asdf'),
        	'authentication' => '1',
    	]);
    }
}
