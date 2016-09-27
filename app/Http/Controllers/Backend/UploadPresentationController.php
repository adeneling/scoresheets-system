<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Input;
use Image;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
class UploadPresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = User::findOrFail(decrypt($id));
        return view('backend.pages.upload.edit', compact('user'));
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
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'presentation_file' => 'max:2048',
        ]);

        $user = User::findOrFail($id);

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
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
        }
        $user->presentation_file = $filename;
        $user->save();
        
        \Flash::success('Data uploaded');
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
