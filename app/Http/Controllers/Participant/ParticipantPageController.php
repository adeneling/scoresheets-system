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
use App\Notification;
use App\Itinerary;
use App\Http\Controllers\Controller;

class ParticipantPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('participant.pages.profile');
    }
    public function dodonts()
    {
        return view('participant.pages.dodonts');
    }
    public function schedules()
    {
        return view('participant.pages.schedules');
    }
    public function feedback()
    {
        return view('participant.pages.feedback');
    }
    public function itinerary()
    {
        $itinerarys = Itinerary::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('participant.pages.itinerary',compact('itinerarys'));
    }
    public function notifications()
    {
        $notifications = Notification::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('participant.pages.notifications',compact('notifications'));
    }
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
        return view('participant.pages.edit-profile', compact('user'));
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
            'category_id' => 'required',
            'selection_date' => 'required',
            'join_date' => 'required',
            'area' => 'required',
            'work_location' => 'required',
            'mobile_phone' => 'required',
            'picture' => 'mimes:jpeg,png',
            'presentation_file' => 'mimes:pdf',
        ]);

        

        $user->nik = $request->input('nik');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->category_id = $request->input('category_id');
        $user->selection_date = $request->input('selection_date');
        $user->join_date = $request->input('join_date');
        $user->birth_place = $request->input('birth_place');
        $user->birthday = $request->input('birthday');
        $user->about_me = $request->input('about_me');
        $user->picture = $request->input('picture');
        $user->gender = $request->input('gender');
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
        $user->activated = 1;
        if ($request->hasFile('picture')) {
            // menambil cover yang diupload berikut ekstensinya
            $filename = null;
            $upload_file = $request->file('picture');
            $extension = $upload_file->getClientOriginalExtension();
            // membuat nama file random dengan extension
            $filename = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';

            // memindahkan file ke folder public/img
            $upload_file->move($destinationPath, $filename);
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
            $user->picture = $filename;
        }
        $user->save();
        \Flash::success('Data Updated');
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