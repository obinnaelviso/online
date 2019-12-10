<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function modules() {
    	return $this->hasMany('App\Module');
    }

    public function facilitator() {
    	return $this->belongsTo('App\Facilitator');
    }
}
