<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')->insert([
        	'no_kamar' => '101',
        	'type' => 'reguler',
        	'harga' => 200000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '102',
        	'type' => 'reguler',
        	'harga' => 200000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '103',
        	'type' => 'reguler',
        	'harga' => 200000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '104',
        	'type' => 'reguler',
        	'harga' => 200000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '105',
        	'type' => 'reguler',
        	'harga' => 200000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '201',
        	'type' => 'delux',
        	'harga' => 300000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '202',
        	'type' => 'delux',
        	'harga' => 300000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '203',
        	'type' => 'delux',
        	'harga' => 300000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '204',
        	'type' => 'delux',
        	'harga' => 300000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '205',
        	'type' => 'delux',
        	'harga' => 300000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '301',
        	'type' => 'superior',
        	'harga' => 400000,
        	'status' => '0',
    	]);

    	DB::table('room')->insert([
        	'no_kamar' => '302',
        	'type' => 'superior',
        	'harga' => 400000,
        	'status' => '0',
    	]);
    	DB::table('room')->insert([
        	'no_kamar' => '303',
        	'type' => 'superior',
        	'harga' => 400000,
        	'status' => '0',
    	]);
    	DB::table('room')->insert([
        	'no_kamar' => '304',
        	'type' => 'superior',
        	'harga' => 400000,
        	'status' => '0',
    	]);
    	DB::table('room')->insert([
        	'no_kamar' => '305',
        	'type' => 'superior',
        	'harga' => 400000,
        	'status' => '0',
    	]);
    }
}
