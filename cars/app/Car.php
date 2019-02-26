<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	protected $appends = ['tax'];
	protected $fillable = ['title', 'color', 'year', 'make', 'model', 'body_style', 'engine_displacement'];

	public function getTaxAttribute() {
		return ((int)date('Y') - (int)$this->year) * $this->engine_displacement * 100;
	}
}
