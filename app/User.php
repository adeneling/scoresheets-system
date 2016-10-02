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
        'about_me',
        'picture',
        'gender',
        'email',
        'password',
        'category_id',
        'category_handled',
        'work_location',
        'city',
        'area',
        'region',
        'job_function',
        'mobile_phone',
        'selection_date',
        'join_date',
        'birthday',
        'birth_place',
        'bank_account',
        'twitter',
        'facebook',
        'instagram',
        'notes',
        'unit_type',
        'unit_name',
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
    public function scoresheetJudged() {
        return $this->hasOne('App\Scoresheet', 'jury_id');
    }
    public function itinerary() {
        return $this->hasMany('App\Itinerary', 'user_id');
    }
    public function notification() {
        return $this->hasMany('App\Notification', 'user_id');
    }

}
