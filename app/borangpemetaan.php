<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class borangpemetaan extends Model
{
    public function lecturer() {
    	return $this->belongsTo('App\User', 'userid', 'id');
    }
}
