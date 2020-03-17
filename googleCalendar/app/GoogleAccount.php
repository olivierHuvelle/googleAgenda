<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
    I'll add the namespaces 
*/

class GoogleAccount extends Model
{
    //
    protected $fillable = ['google_id', 'name', 'token'];
    protected $casts = ['token' => 'json'];

    public function user()
    {
        return $this->belongsTo('App\User'); //vs User::class
    }

    public function calendars()
    {
        return $this->hasMany('App\Calendar'); //Calendar::class
    }
}
