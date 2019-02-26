<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarTest extends TestCase
{

	public function testAddCarInstanceTest()
	{
		$response = $this->post('http://api.cars.local/cars',
								[
									'_token' => csrf_token(),
									'title' => 'title',
									'color' => 'color',
									'year' => 'year',
									'make' => 'make',
									'model' => 'model',
									'body_style' => 'body style',
									'engine_displacement' => 1,
									'created_at' => now()->timestamp,
									'updated_at' => now()->timestamp

								],
								[
									'X-CSRF-TOKEN' => csrf_token()
								]);
		$response->assertStatus(201);
	}

	public function testGetCarInstanceTest()
	{
		$response = $this->json('GET','http://api.cars.local/cars/36');

		$response
			->assertStatus(200)
			->assertJsonStructure([
									  'id',
									  'title',
									  'color',
									  'year',
									  'make',
									  'model',
									  'body_style',
									  'engine_displacement',
									  'created_at',
									  'updated_at',
									  'tax'
								  ]);
	}


	public function testDeleteFirstCarInstanceTest( )
	{
		$response = $this->delete('http://api.cars.local/cars/23');

		$response
			->assertStatus(204);
	}
}
