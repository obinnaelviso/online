<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ctes extends Model
{
    public function student() {
    	return $this->belongsTo('App\studentlist', 'studentid', 'id');
    }

    public function lecturer() {
    	return $this->belongsTo('App\User', 'userid', 'id');
    }
}
