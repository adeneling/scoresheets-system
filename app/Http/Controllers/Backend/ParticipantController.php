<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Category;
use App\Scoresheet;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        $participants = Category::where('id', 'LIKE', '%'.$q.'%')->orderBy('created_at','asc')->first();
        return view('backend.pages.participant.index', compact('participants','q'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participant = User::findOrFail(decrypt($id));
        //$category = Category::where('id', $request->input('category_id') )->first();
        //return $category;
        return view('backend.pages.participant.edit', compact('participant'));
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
            'room_id' => 'required',
            'session_id' => 'required',
        ]);
        /* SCORESHEET */
        $presentation_material = $request->input('presentation_material');
        $communication_skill = $request->input('communication_skill');
        $achievement = $request->input('achievement');
        $personal_value = $request->input('personal_value');
        $customer_care_knowledge = $request->input('customer_care_knowledge');
        $solution_skill = $request->input('solution_skill');
        $inspirational_story = $request->input('inspirational_story');
        /*CALCULATE*/
        $category = Category::where('id', $request->input('category_id') )->first();
        
        $presentation_material_result = $presentation_material * $category->presentation_material;
        $communication_skill_result = $communication_skill * $category->communication_skill;
        $achievement_result = $achievement * $category->achievement;
        $personal_value_result = $personal_value * $category->personal_value;
        $customer_care_knowledge_result = $customer_care_knowledge * $category->customer_care_knowledge;
        $solution_skill_result = $solution_skill * $category->solution_skill;
        $inspirational_story_result = $inspirational_story * $category->inspirational_story;
        /* RESULT */
        $total_score = 
            $presentation_material_result + 
            $communication_skill_result + 
            $achievement_result + 
            $personal_value_result + 
            $customer_care_knowledge_result +
            $solution_skill_result +
            $inspirational_story_result
        ;
        $coeficient_score =  
            $presentation_material + 
            $communication_skill + 
            $achievement + 
            $personal_value + 
            $customer_care_knowledge +
            $solution_skill +
            $inspirational_story
        ;
        $total_coeficient_score = $total_score / $coeficient_score;
        /*REQUEST*/
        $scoresheet = new Scoresheet();
        $scoresheet->participant_id = $request->input('participant_id');
        $scoresheet->participant_name = $request->input('participant_name');
        $scoresheet->participant_area = $request->input('participant_area');
        $scoresheet->jury_id = $request->input('jury_id');
        $scoresheet->category_id = $request->input('category_id');
        $scoresheet->room_id = $request->input('room_id');
        $scoresheet->notes = $request->input('notes');
        $scoresheet->session_id = $request->input('session_id');
        $scoresheet->time = Carbon::now();
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
        \Flash::success('Success');
        return redirect('scoresheets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
