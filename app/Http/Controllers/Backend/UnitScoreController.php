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
    public function index()
    {
        $unitScore = UnitScore::orderBy('created_at','desc')->get();
        return view('backend.pages.unit-score.index',compact('unitScore'));
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
