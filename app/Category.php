<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    
    protected $fillable = [
        'name', 
        'parent_category', 
        'description', 
        'presentation_material', 
        'communication_skill', 
        'achievement', 
        'personal_value', 
        'customer_care_knowledge', 
        'solution_skill', 
        'inspirational_story',
        'leadership',
        'tier',
    ];

    public function user() {
        return $this->hasMany('App\User', 'category_id');
    }
    public function scoresheet() {
        return $this->hasMany('App\Scoresheet', 'category_id');
    }
}
