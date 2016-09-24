<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scoresheet extends Model
{
    protected $table = 'scoresheets';
    
    protected $fillable = [
    	'participant_id',
        'participant_name',
        'participant_area',
    	'jury_id',
    	'category_id',
    	'room_id',
    	'notes',
    	'session_id',
    	'time',
    	'presentation_material','presentation_material_note',
    	'communication_skill','communication_skill_note',
    	'achievement','achievement_note',
    	'personal_value','personal_value_note',
    	'customer_care_knowledge','customer_care_knowledge_note',
    	'solution_skill','solution_skill_note',
    	'inspirational_story','inspirational_story_note',
    	'total_score',
    	'coeficient_score',
    	'total_coeficient_score',
    ];
    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function user() {
        return $this->belongsTo('App\User', 'participant_id');
    }
}
