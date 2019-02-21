<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 0; $i < 100; $i++) {
			DB::table( 'cars' )->insert( [
											 'title' => Str::random( 255 ),
											 'color' => Str::random( 45 ),
											 'year' => Str::random( 4 ),
											 'make' => Str::random( 45 ),
											 'model' => Str::random( 45 ),
											 'body_style' => Str::random( 255 ),
											 'engine_displacement' => rand( 0, 100 )
										 ] );
		}
    }
}
