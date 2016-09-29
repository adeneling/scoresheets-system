<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Input;
use Image;
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
            'category_id' => 'required',
            'selection_date' => 'required',
            'join_date' => 'required',
            'picture' => 'mimes:jpeg,png',
            'presentation_file' => 'mimes:pdf',

        ]);
        $user = new User();
        $roleName = $request->input('role');
        $role = Role::where('name', $roleName)->first();

        $user->name = $request->input('name');
        $user->nik = $request->input('nik');
        $user->about_me = $request->input('about_me');
        $user->gender = $request->input('gender');
        $user->category_id = $request->input('category_id');
        $user->work_location = $request->input('work_location');
        $user->city = $request->input('city');
        $user->area = $request->input('area');
        $user->region = $request->input('region');
        $user->job_function = $request->input('job_function');
        $user->mobile_phone = $request->input('mobile_phone');
        $user->selection_date = $request->input('selection_date');
        $user->join_date = $request->input('join_date');
        $user->birthday = $request->input('birthday');
        $user->birth_place = $request->input('birth_place');
        $user->bank_account = $request->input('bank_account');
        $user->twitter = $request->input('twitter');
        $user->facebook = $request->input('facebook');
        $user->instagram = $request->input('instagram');
        $user->notes = $request->input('notes');
        $user->unit_type = $request->input('unit_type');
        $user->unit_name = $request->input('unit_name');        
        $user->activated = 0;
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        
        if ($request->input('role') == 'participant') {
            $user->judged = 0;
        }

        if ($request->hasFile('presentation_file')) {
            // menambil cover yang diupload berikut ekstensinya
            $filename = null;
            $upload_file = $request->file('presentation_file');
            $extension = $upload_file->getClientOriginalExtension();
            // membuat nama file random dengan extension
            $filename = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'files';

            // memindahkan file ke folder public/img
            $upload_file->move($destinationPath, $filename);
            // hapus cover lama, jika ada
            if ($user->presentation_file) {
                $old_file = $user->presentation_file;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'files'. DIRECTORY_SEPARATOR . $user->presentation_file;
                try {
                    //File::delete($filepath);
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $user->presentation_file = $filename;
        }

        

        if ($request->hasFile('picture')) {
            // menambil cover yang diupload berikut ekstensinya
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
        $user = User::findOrFail(decrypt($id));
        return view('backend.pages.users.show', compact('user'));
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

        $this->validate($request, [
            'name' => 'required',
            'nik' => 'required',
            'category_id' => 'required',
            'area' => 'required',
            'selection_date' => 'required',
            'join_date' => 'required',
            'picture' => 'mimes:jpeg,png',
            'presentation_file' => 'mimes:pdf',
        ]);
        
        
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->nik = $request->input('nik');
        $user->about_me = $request->input('about_me');
        $user->gender = $request->input('gender');
        $user->category_id = $request->input('category_id');
        $user->work_location = $request->input('work_location');
        $user->city = $request->input('city');
        $user->area = $request->input('area');
        $user->region = $request->input('region');
        $user->job_function = $request->input('job_function');
        $user->mobile_phone = $request->input('mobile_phone');
        $user->selection_date = $request->input('selection_date');
        $user->join_date = $request->input('join_date');
        $user->birthday = $request->input('birthday');
        $user->birth_place = $request->input('birth_place');
        $user->bank_account = $request->input('bank_account');
        $user->twitter = $request->input('twitter');
        $user->facebook = $request->input('facebook');
        $user->instagram = $request->input('instagram');
        $user->notes = $request->input('notes');
        $user->unit_type = $request->input('unit_type');
        $user->unit_name = $request->input('unit_name');                     

        if ($request->hasFile('presentation_file')) {
            // menambil cover yang diupload berikut ekstensinya
            $filename = null;
            $upload_file_presentation = $request->file('presentation_file');
            $extensionFile = $upload_file_presentation->getClientOriginalExtension();
            // membuat nama file random dengan extension
            $filename = str_random(10) . '.' . $extensionFile;
            $destinationPathFile = public_path() . DIRECTORY_SEPARATOR . 'files';

            // memindahkan file ke folder public/img
            $upload_file_presentation->move($destinationPathFile, $filename);
            // hapus cover lama, jika ada
            if ($user->presentation_file) {
                $old_file_presentation = $user->presentation_file;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'files'. DIRECTORY_SEPARATOR . $user->presentation_file;
                try {
                    //File::delete($filepath);
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $user->presentation_file = $filename; 
            
        }

        if ($request->hasFile('picture')) {
            // menambil cover yang diupload berikut ekstensinya
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