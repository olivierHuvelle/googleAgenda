<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    //
    protected $fillable = ['google_id', 'name', 'color', 'timezone'];

    public function googleAccount()
    {
        return $this->belongsTo(GoogleAccount::class); //versus 'App\GoogleAccount'
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
