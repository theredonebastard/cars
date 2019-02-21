<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	public function tax() {
		return ((int)date('Y') - (int)$this->year) * $this->engine_displacement * 100;
	}
}