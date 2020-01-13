<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Inside extends Authenticatable
{
	use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'catype', 'idnum', 'correspondence', 'mailaddress', 'telephone', 'whatsapp', 'schoolname', 'participants', 'productname', 'cert', 'medal', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    // public function theme() {
    //     return $this->belongsTo('App\Theme');
    // }

    // public function certificate() {
    //     return $this->hasOne('App\Certificate');
    // }
}