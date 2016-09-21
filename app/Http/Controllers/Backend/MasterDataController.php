<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\MasterData;
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
        $masterData = MasterData::orderBy('created_at','desc')->get();
        return view('backend.pages.master-data.index',compact('masterData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.master-data.create');
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
            /*'category_id' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'name' => 'required',
            'unit_type' => 'required',
            'unit_name' => 'required',
            'no_telp' => 'required',
            'gender' => 'required',
            'room_code' => 'required',
            'region' => 'required',
            'area' => 'required',
            'email' => 'required',
            'size_poloshirt' => 'required',
            'birth_place' => 'required',
            'birthday' => 'required',
            'join_date' => 'required',*/

        ]);
        MasterData::create($request->all());
        \Flash::success('Master member data: ' . $request->get('name') .  ' Added.');
        return redirect('master-data');
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
        $masterData = MasterData::findOrFail(decrypt($id));
        return view('backend.pages.master-data.edit', compact('masterData'));
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
        $masterData = MasterData::findOrFail($id);
        $this->validate($request, [
            /*'category_id' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'name' => 'required',
            'unit_type' => 'required',
            'unit_name' => 'required',
            'no_telp' => 'required',
            'gender' => 'required',
            'room_code' => 'required',
            'region' => 'required',
            'area' => 'required',
            'email' => 'required',
            'size_poloshirt' => 'required',
            'birth_place' => 'required',
            'birthday' => 'required',
            'join_date' => 'required',*/
        ]);
        $masterData->update($request->all());
        \Flash::success('Master member data ID: '. $masterData->id . ' Edited.');
        return redirect('master-data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $masterData = MasterData::find($id);
        MasterData::find($id)->delete();
        \Flash::success('Master member data ID: '. $masterData->nik .' Deleted.');
        return redirect('master-data');
    }
}
