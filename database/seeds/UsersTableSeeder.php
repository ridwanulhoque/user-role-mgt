<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
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
    	$faker = Faker::create();

    	foreach(range(1, 10) as $index){

	        User::create([
	        	'name' => $faker->name,
	        	'email' => $faker->unique()->safeEmail,
	        	'email_verified_at' => now(),
	        	'password' => bcrypt('12345678'),
	        	'remember_token' => Str::random(10)
	        ]);
	            		
    	}

    }
}
