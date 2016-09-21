<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.registration.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        $user = User::findOrFail(decrypt($id));
        return view('backend.pages.registration.edit', compact('user'));
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
        $user = User::findOrFail($id);
        $this->validate($request, [
            'nik' => 'required',
            'email' => 'required',
        ]);
        $user->nik = $request->input('nik');
        $user->name = $request->input('name');
        $user->birthday = $request->input('birthday');
        $user->about_me = $request->input('about_me');
        $user->picture = $request->input('picture');
        $user->gender = $request->input('gender');
        $user->email = $request->input('email');
        $user->category_id = $request->input('category_id');
        $user->work_location = $request->input('work_location');
        $user->city = $request->input('city');
        $user->area = $request->input('area');
        $user->job_function = $request->input('job_function');
        $user->mobile_phone = $request->input('mobile_phone');
        $user->bank_account = $request->input('bank_account');
        $user->twitter = $request->input('twitter');
        $user->facebook = $request->input('facebook');
        $user->instagram = $request->input('instagram');
        $user->notes = $request->input('notes');
        $user->presentation_file = $request->input('presentation_file');
        $user->qrfield = $request->input('qrfield');
        $user->checking = 1;
        //$user->has_checked_in = $request->input('');
        $user->activated = 1;
        $user->save();
        \Flash::success('Data updated');
        return redirect('/home');
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
