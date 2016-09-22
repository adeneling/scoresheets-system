<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\MasterData;
use App\User;
use App\Role;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
class CheckingController extends Controller
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
            'nik' => 'required',
            'email' => 'required',
        ]);
        $name = $request->input('name');
        $nik = $request->input('nik');
        $email = $request->input('email');
        $password = str_random(8);       
        if (MasterData::where('nik',$nik)->where('email',$email)->exists()) {
            if(User::where('email',$email)->exists()){
                return redirect('/')->with('status', 'Anda sudah melakukan pendaftaran, silahkan login');
            }else{
                $memberRole = Role::where('name', 'participant')->first();            
                $user = new User();
                $user->name = $name;
                $user->nik = $nik;
                $user->email = $email;
                $user->checking = 1;
                $user->password = bcrypt($password);
                $user->save();
                $user->attachRole($memberRole);
                /* KIRIM EMAIL */
                $mail = array( 'email' => $email, 'password' => $password);
                Mail::send('mails.mail', $mail, function($message) use ($mail) {
                    $message->to('maulanayusupp@gmail.com');
                    $message->subject('User Account - Scoresheets');
                });
                /* MESSAGE SUCCESS */
                return redirect('/')->with('status', 'Data sesuai, silahkan cek email anda untuk login');                           
            }
            
        }else{
            return redirect('/')->with('status', 'Data tidak cocok');
        }

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