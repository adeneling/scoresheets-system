<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Scoresheet;
use App\User;
use App\Category;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ScoresheetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $q = $request->get('q');
        if (isset($q)) {
            $category = Category::where('id',$q)->first();
        }        
        $scoresheets = Scoresheet::where('category_id', 'LIKE', '%'.$q.'%')->orderBy('created_at','desc')->get();
        return view('backend.pages.scoresheets.index', compact('scoresheets', 'q', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scoresheet = Scoresheet::findOrFail(decrypt($id));
        return view('backend.pages.scoresheets.show', compact('scoresheet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scoresheet = Scoresheet::findOrFail(decrypt($id));
        return view('backend.pages.scoresheets.edit', compact('scoresheet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
        ]);
        /* scoresheet */
        $presentation_material = $request->input('presentation_material');
        $communication_skill = $request->input('communication_skill');
        $achievement = $request->input('achievement');
        $personal_value = $request->input('personal_value');
        $customer_care_knowledge = $request->input('customer_care_knowledge');
        $solution_skill = $request->input('solution_skill');
        $inspirational_story = $request->input('inspirational_story');
        $leadership = $request->input('leadership');        
        /* calculate with formula */
        $category = Category::where('id', $request->input('category_id') )->first();        
        $presentation_material_result = $presentation_material * $category->presentation_material / 100;
        $communication_skill_result = $communication_skill * $category->communication_skill / 100;
        $achievement_result = $achievement * $category->achievement / 100;
        $personal_value_result = $personal_value * $category->personal_value / 100;
        $customer_care_knowledge_result = $customer_care_knowledge * $category->customer_care_knowledge / 100;
        $solution_skill_result = $solution_skill * $category->solution_skill;
        $inspirational_story_result = $inspirational_story * $category->inspirational_story / 100;
        $leadership_result = $leadership * $category->leadership / 100;
        /* result */
        $total_score = 
            $presentation_material_result + 
            $communication_skill_result + 
            $achievement_result + 
            $personal_value_result + 
            $customer_care_knowledge_result +
            $solution_skill_result +
            $inspirational_story_result +
            $leadership_result
        ;
        $coeficient_score =  
            $presentation_material + 
            $communication_skill + 
            $achievement + 
            $personal_value + 
            $customer_care_knowledge +
            $solution_skill +
            $inspirational_story +
            $leadership
        ;
        //$total_coeficient_score = $total_score / $coeficient_score;
        $total_coeficient_score = $total_score;
        /*REQUEST*/
        $scoresheet = Scoresheet::findOrFail($id);
        $scoresheet->participant_id = $request->input('participant_id');
        $scoresheet->participant_name = $request->input('participant_name');
        $scoresheet->participant_area = $request->input('participant_area');
        $scoresheet->jury_id = $request->input('jury_id');
        $scoresheet->category_id = $request->input('category_id');
        $scoresheet->room_id = $request->input('room_id');
        $scoresheet->notes = $request->input('notes');
        $scoresheet->session_id = $request->input('session_id');
        $scoresheet->time = Carbon::now();
        /* note */
        $scoresheet->presentation_material_note = $request->input('presentation_material_note');
        $scoresheet->communication_skill_note = $request->input('communication_skill_note');
        $scoresheet->achievement_note = $request->input('achievement_note');
        $scoresheet->personal_value_note = $request->input('personal_value_note');
        $scoresheet->customer_care_knowledge_note = $request->input('customer_care_knowledge_note');
        $scoresheet->solution_skill_note = $request->input('solution_skill_note');
        $scoresheet->inspirational_story_note = $request->input('inspirational_story_note');
        $scoresheet->leadership_note = $request->input('leadership_note');
        /* calculate result */
        $scoresheet->presentation_material = $presentation_material;
        $scoresheet->communication_skill = $communication_skill;
        $scoresheet->achievement = $achievement;
        $scoresheet->personal_value = $personal_value;
        $scoresheet->customer_care_knowledge = $customer_care_knowledge;
        $scoresheet->solution_skill = $solution_skill;
        $scoresheet->inspirational_story = $inspirational_story;
        $scoresheet->total_score = $total_score;
        $scoresheet->coeficient_score = $coeficient_score;
        $scoresheet->total_coeficient_score = $total_coeficient_score;
        $scoresheet->save();
        /* user judged */
        $user = User::where('id', $request->input('participant_id') )->first();
        $user->judged = 0;
        $user->save();
        \Flash::success('Success');
        return redirect('/scoresheets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scoresheet = Scoresheet::find($id);
        $user = User::where('id', $scoresheet->participant_id)->first();
        $user->judged = 0;
        $user->save();
        Scoresheet::find($id)->delete();
        \Flash::success('Scoresheet ID: '. $scoresheet->id .' Deleted.');
        return redirect('scoresheets');
    }
}
