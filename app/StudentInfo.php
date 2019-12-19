<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
	public function lecturer() {
		return $this->belongsTo('App\User')->where('usertype', 1);
	}
}
