<?php

namespace Tests\Unit;

use App\Car;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarTest extends TestCase
{

	public function testAccessorTest()
	{
		$db_car = DB::select('select * from cars where id = 30');
		$db_car_tax = ((int)date('Y') - (int)$db_car[0]->year) * $db_car[0]->engine_displacement * 100;

		$car = $this->json('GET', 'http://api.cars.local/cars/30');

		$car
			->assertStatus(200)
			->assertJson([
				'tax' => $db_car_tax
							  ]);
	}


}
