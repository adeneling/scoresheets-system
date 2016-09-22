<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitCategoryParent extends Model
{
    protected $table = 'unit-category-parent';
    
    protected $fillable = [
    	'name'
    ];
    public function unitCategory(){
    	return $this->hasMany('App\UnitCategory', 'parent_id');
    }
}
