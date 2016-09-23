<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\UnitScore;
use App\UnitCategory;
use App\UnitCategoryParent;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UnitScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* all unit */
        $unitScore = UnitScore::orderBy('created_at','desc')->get();

        /* top 3 from each category */
        $q = $request->get('q');
        $topCategory = UnitScore::where('category_id', $q)->orderBy('total_score','desc')->take(3)->get();

        /* top from each category*/
        $topCategory1 = UnitScore::where('category_id', 1)->orderBy('total_score','desc')->take(3)->get();
        $topCategory2 = UnitScore::where('category_id', 2)->orderBy('total_score','desc')->take(3)->get();
        $topCategory3 = UnitScore::where('category_id', 3)->orderBy('total_score','desc')->take(3)->get();
        $topCategory4 = UnitScore::where('category_id', 4)->orderBy('total_score','desc')->take(3)->get();
        $topCategory5 = UnitScore::where('category_id', 5)->orderBy('total_score','desc')->take(3)->get();
        $topCategory6 = UnitScore::where('category_id', 6)->orderBy('total_score','desc')->take(3)->get();
        $topCategory7 = UnitScore::where('category_id', 7)->orderBy('total_score','desc')->take(3)->get();
        $topCategory8 = UnitScore::where('category_id', 8)->orderBy('total_score','desc')->take(3)->get();
        $topCategory9 = UnitScore::where('category_id', 9)->orderBy('total_score','desc')->take(3)->get();
        $topCategory10 = UnitScore::where('category_id', 10)->orderBy('total_score','desc')->take(3)->get();
        $topCategory11 = UnitScore::where('category_id', 11)->orderBy('total_score','desc')->take(3)->get();

        /* all data from unit score for each area */
        $area1 = UnitScore::where('area', 1)->get();
        $area2 = UnitScore::where('area', 2)->get();
        $area3 = UnitScore::where('area', 3)->get();
        $area4 = UnitScore::where('area', 4)->get();

        $nilaiArea1;
        $nilaiArea2;
        $nilaiArea3;
        $nilaiArea4;
        $tempNilaiArea1;
        $tempNilaiArea2;
        $tempNilaiArea3;
        $tempNilaiArea4;

        /*foreach ($area1 as $dataArea1) {
            if ($dataArea1->total_score >= $topCategory1[1]->total_score) {
                $tempNilaiArea1 = 3;
            }elseif ($dataArea1 >= $topCategory1[2]->total_score && $dataArea1 < $topCategory1[1]->total_score) {
                $tempNilaiArea1 = 2;
            }elseif($dataArea1 >= $topCategory1[3]->total_score && $dataArea1 < $topCategory1[3]->total_score){
                $tempNilaiArea1 = 1;
            }elseif ($dataArea1 < $topCategory1[3]->total_score) {
                $tempNilaiArea1 = 0;
            }
        }*/
        



        return view('backend.pages.unit-score.index',compact('unitScore','tops','topCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.unit-score.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [


        ]);
        UnitScore::create($request->all());
        \Flash::success('Unit score with category ID: ' . $request->get('category_id') .  ' Added.');
        return redirect('unit-score');
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
        $unit = UnitScore::findOrFail(decrypt($id));
        return view('backend.pages.unit-score.edit', compact('unit'));
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
        $unit = UnitScore::findOrFail($id);
        $unit->update($request->all());
        \Flash::success('Unit ID: '. $unit->id . ' Edited.');
        return redirect('unit-score');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = UnitScore::find($id);
        UnitScore::find($id)->delete();
        \Flash::success('Unit ID: '. $unit->id .' Deleted.');
        return redirect('unit-score');
    }
}