<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class User_dbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for($i = 1; $i <= 1000; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('user_dbs')->insert([
    			'username' => Str::random(32),
    			'password' => $faker->password(),
    			'isDeleted' => 0,
    			'date_of_registration' => $faker->date()
    		]);

    	}
    }
}
