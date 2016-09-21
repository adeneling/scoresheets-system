<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at','desc')->get();
        return view('backend.pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.users.create');
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
            'nik' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',

        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->nik = $request->input('nik');
        $user->email = $request->input('email');
        $user->checking = 1;
        $user->password = bcrypt($request->input('password'));
        $user->attachRole($request->input('role'));
        $user->save();
        \Flash::success('New account with Email: ' . $request->get('name') .  ' Added.');
        return redirect('users');
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
        return view('backend.pages.users.edit', compact('user'));
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
            'name' => 'required',
            'nik' => 'required',
            'email' => 'required',
        ]);
        $user->password = bcrypt($request->input('password'));
        $user->attachRole($request->input('role'));
        $user->save();
        \Flash::success('ID with email: '. $user->id . ' Edited.');
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        User::find($id)->delete();
        \Flash::success('E-Mail: '. $user->email .' Deleted.');
        return redirect('users');
    }
}
