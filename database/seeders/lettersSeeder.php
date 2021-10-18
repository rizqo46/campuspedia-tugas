<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class lettersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('us_US');
 
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('cover_letters')->insert([
                'uuid' => $faker->uuid,
        		'name' => $faker->name,
        		'email' => $faker->email,
                'position_to_apply' => $faker->jobTitle,
                'company_to_apply' => $faker->company,
                'experience' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        	]);
 
        }
    }
}
