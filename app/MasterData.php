<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterData extends Model
{
    protected $table = 'master-data';
    
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
        'selection_date',
    ];
}
