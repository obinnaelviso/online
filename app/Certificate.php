<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public function facilitator() {
    	return $this->belongsTo('App\Facilitator');
    }
}
