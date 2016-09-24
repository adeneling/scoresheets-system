<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';

    protected $fillable = [
        'nik',
        'name',
        'birthday',
        'about_me',
        'picture',
        'gender',
        'email',
        'password',
        'category_id',
        'work_location',
        'city',
        'area',
        'region',
        'job_function',
        'mobile_phone',
        'bank_account',
        'twitter',
        'facebook',
        'instagram',
        'notes',
        'presentation_file',
        'qrfield',
        'judged',
        'has_checked_in',
        'activated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function scoresheet() {
        return $this->hasOne('App\Scoresheet', 'participant_id');
    }
}
