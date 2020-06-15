<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
    	for($i = 0;$i < 10;$i++){
    		DB::table("tours")->insert([
    			'name'=>Str::random(30),
    			'image'=>Str::random(30),
    			'typetour'=>Str::random(30),
    			'schedule'=>Str::random(30),
    			'depart'=>date("Y-m-d H:i:s"),
    			'number'=>50,
    			'price'=>1000000,
    		]);
    	}
    }
}


