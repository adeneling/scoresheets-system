<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitCategory extends Model
{
    protected $table = 'unit-category';
    
    protected $fillable = [
    	'parent_id',
    	'name',
    	'coeficient',
    ];
    public function unitScore(){
    	return $this->hasMany('App\UnitScore', 'category_id');
    }
    public function unitCategoryParent(){
    	return $this->belongsTo('App\UnitCategoryParent', 'parent_id');
    }
}
