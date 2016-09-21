<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterMember extends Model
{
    protected $table = 'master-member';
    
    protected $fillable = [
        'category_id',
        'nik',
        'email',
        'name',
        'unit_type',
        'unit_name',
        'no_telp',
        'gender',
        'room_code',
        'region',
        'area',
        'email',
        'size_poloshirt',
        'birth_place',
        'birthday',
        'join_date',
    ];
}
