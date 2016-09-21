<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\MasterMember;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MasterDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masterData = MasterMember::orderBy('created_at','desc')->get();
        return view('backend.pages.master-data.index',compact('masterData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.category.create');
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
            'name' => 'required',
            'parent_category' => 'required',
            // 'description' => 'required',
            // 'presentation_material' => 'required',
            // 'communication_skill' => 'required',
            // 'achievement' => 'required',
            // 'personal_value' => 'required',
            // 'customer_care_knowledge' => 'required',
            // 'solution_skill' => 'required',
            // 'inspirational_story' => 'required',

        ]);
        Category::create($request->all());
        \Flash::success('Category name: ' . $request->get('name') .  ' Added.');
        return redirect('category');
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
        $category = Category::findOrFail(decrypt($id));
        return view('backend.pages.category.edit', compact('category'));
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
        $category = Category::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            // 'parent_category' => 'required',
            // 'description' => 'required',
            // 'presentation_material' => 'required',
            // 'communication_skill' => 'required',
            // 'achievement' => 'required',
            // 'personal_value' => 'required',
            // 'customer_care_knowledge' => 'required',
            // 'solution_skill' => 'required',
            // 'inspirational_story' => 'required',
        ]);
        $category->update($request->all());
        \Flash::success('Category ID: '. $category->id . ' Edited.');
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        Category::find($id)->delete();
        \Flash::success('Category ID: '. $category->id .' Deleted.');
        return redirect('category');
    }
}
