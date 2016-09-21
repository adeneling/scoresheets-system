<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
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
    ];

    public function user() {
        return $this->belongsTo('App\User', 'category_id');
    }
}
