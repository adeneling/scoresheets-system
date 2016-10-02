<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\UnitCategory;
use App\UnitCategoryParent;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UnitCategoryController extends Controller
{
    public function bestArea(){
        return view('backend.pages.unit-category.best-area');
    }
    public function bestOfTheBest(){
        return view('backend.pages.unit-category.best-of-the-best');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unitCategory = UnitCategory::all();
        $unitCategoryParent = UnitCategoryParent::take(2)->get();
        return view('backend.pages.unit-category.index',compact('unitCategory','unitCategoryParent'));
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
        //
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
        //
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
