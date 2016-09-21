<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterMember extends Model
{
    protected $table = 'master-member';
    
    protected $fillable = [
        'nik', 
        'email',
    ];
}
