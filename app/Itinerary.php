<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    protected $table = 'itinerary';
    
    protected $fillable = [
    	'user_id',
        'user_nik',
        'booking_id',
        'detail',
        'url',

    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}