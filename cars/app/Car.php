<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	protected $appends = ['tax'];

	public function getTaxAttribute() {
		return ((int)date('Y') - (int)$this->year) * $this->engine_displacement * 100;
	}
}
