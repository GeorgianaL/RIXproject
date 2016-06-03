<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Preference;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function videos() {
        return $this->belongsToMany('App\Video');
    }
    public function preferences() {
        $preferences = Preference::where('id_user', $this->id)->first();
        return $preferences;
    }
}
