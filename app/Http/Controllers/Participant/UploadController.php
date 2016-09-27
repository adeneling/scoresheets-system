<?php

namespace App\Http\Controllers\Participant;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Input;
use Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadController extends Controller
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
        return view('participant.pages.upload-file', compact('user'));
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
            'presentation_file' => 'required|mimes:pdf',
        ]);

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
        \Flash::success('File presentation uploaded');
        return redirect('bestcs/profile');
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
