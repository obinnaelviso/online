<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    public function bics() {
        return $this->hasMany('App\Bic');
    }

    public function facilitators() {
        return $this->hasMany('App\Facilitator');
    }
}