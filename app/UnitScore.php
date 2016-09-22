<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitScore extends Model
{
    protected $table = 'unit-score';
    
    protected $fillable = [
    	'category_id',
    	'type',
    	'area',
    	'location',
    	'total_score',
    	'notes',
    ];
    public function unitCategory(){
    	return $this->belongsTo('App\UnitCategory', 'category_id');
    }
}
