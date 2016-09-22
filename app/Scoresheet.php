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
    	'presentation_material',
    	'communication_skill',
    	'achievement',
    	'personal_value',
    	'customer_care_knowledge',
    	'solution_skill',
    	'inspirational_story',
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
