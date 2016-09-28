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
    protected $email = '';
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
        $nik = $request->input('nik');
        $email = $request->input('email');
        $password = str_random(8);
        
        if (User::where('nik',$nik)->where('email',$email)->exists()) {
            if(User::where('nik', $nik)->where('email', $email)->where('activated','!=',1)->first()){
                $user = User::where('nik', $nik)->where('email', $email)->first();
                $user->activated = 1;
                $user->password = bcrypt($password);
                $user->save();
                /* KIRIM EMAIL */
                $mail = array( 'email' => $email, 'password' => $password, 'user' => $user->email);
                Mail::send('mails.mail', compact('mail', 'email', 'password'), function($message) use ($mail, $email, $password) {
                    $message->to($email);
                    $message->subject('User Account - Scoresheets');
                });
                /* MESSAGE SUCCESS */
                return redirect('/')->with('status', 'Data sesuai, silahkan cek email anda untuk login');                
            }else{
                return redirect('/')->with('status', 'Your account already activated, please check your email.');
            }
            
        }else{
            return redirect('/')->with('status', 'Data tidak cocok');
        }

    }
    public function sendActivation(Request $request){

        
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