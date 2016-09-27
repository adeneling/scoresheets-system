<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notification';
    
    protected $fillable = [
    	'user_id',
        'user_nik',
        'title',
        'message',
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
