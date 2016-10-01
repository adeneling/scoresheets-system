<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use App\RoleUser;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Input;
use Image;
class JudgesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $roles = Role::where('name','jury')->first();
        return view('backend.pages.judges.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.judges.create');
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
            'email' => 'required',
            'password' => 'required',
            'picture' => 'mimes:jpeg,png',

        ]);
        $handle = 
            $request->input('category_1') .','. 
            $request->input('category_2') .','. 
            $request->input('category_3') .','. 
            $request->input('category_4') .','. 
            $request->input('category_5') .','. 
            $request->input('category_6') .','. 
            $request->input('category_7') .','. 
            $request->input('category_8') .','. 
            $request->input('category_9') .','. 
            $request->input('category_10') .','. 
            $request->input('category_11') .','. 
            $request->input('category_12') .','. 
            $request->input('category_13') .','. 
            $request->input('category_14')
        ;

        $user = new User();
        $role = Role::where('name', 'jury')->first();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->category_handled = $handle;
        $user->about_me = $request->input('about_me');

        if ($request->hasFile('picture')) {
            // mengambil cover yang diupload berikut ekstensinya
            $picturename = null;
            $upload_file = $request->file('picture');
            $extension = $upload_file->getClientOriginalExtension();
            // membuat nama file random dengan extension
            $picturename = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';

            // memindahkan file ke folder public/img
            $upload_file->move($destinationPath, $picturename);
            // hapus cover lama, jika ada
            if ($user->picture) {
                $old_file = $user->picture;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'. DIRECTORY_SEPARATOR . $user->picture;
                try {
                    //File::delete($filepath);
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $user->picture = $picturename;
        }
        $user->save();
        $user->attachRole($role);
        
        \Flash::success('New account with Email: ' . $request->get('name') .  ' Added.');
        return redirect('judges');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail(decrypt($id));
        return view('backend.pages.judges.show', compact('user'));
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
        return view('backend.pages.judges.edit', compact('user'));
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
            'name' => 'required',
            'picture' => 'mimes:jpeg,png',
        ]);
        
        
        $user = User::findOrFail($id);
        $handle = 
            $request->input('category_1') .','. 
            $request->input('category_2') .','. 
            $request->input('category_3') .','. 
            $request->input('category_4') .','. 
            $request->input('category_5') .','. 
            $request->input('category_6') .','. 
            $request->input('category_7') .','. 
            $request->input('category_8') .','. 
            $request->input('category_9') .','. 
            $request->input('category_10') .','. 
            $request->input('category_11') .','. 
            $request->input('category_12') .','. 
            $request->input('category_13') .','. 
            $request->input('category_14')
        ;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->about_me = $request->input('about_me');
        $user->category_handled = $handle;

        if ($request->hasFile('picture')) {
            // mengambil cover yang diupload berikut ekstensinya
            $picturename = null;
            $upload_file = $request->file('picture');
            $extension = $upload_file->getClientOriginalExtension();
            // membuat nama file random dengan extension
            $picturename = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';

            // memindahkan file ke folder public/img
            $upload_file->move($destinationPath, $picturename);
            // hapus cover lama, jika ada
            if ($user->picture) {
                $old_file = $user->picture;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'. DIRECTORY_SEPARATOR . $user->picture;
                try {
                    //File::delete($filepath);
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $user->picture = $picturename;
        }
        $user->save();
        \Flash::success('ID with email: '. $user->email . ' Edited.');
        return redirect('judges');
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
        return redirect('judges');
    }
}
