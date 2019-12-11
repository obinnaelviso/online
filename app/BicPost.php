<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BicPost extends Model
{
    public function modules() {
    	return $this->hasMany('App\Module');
    }

    public function bic() {
    	return $this->belongsTo('App\Bic');
    }
}
