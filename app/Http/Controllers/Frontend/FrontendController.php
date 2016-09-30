<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('frontend.pages.login');
    }

    public function index()
    {
        //
    }
    public function resetPassword(){
        return view('frontend.pages.reset-password');
    }
    public function postPassword(Request $request){
        $this->validate($request, [
            'email' => 'required',
        ]);
        $email = $request->input('email');
        $password = str_random(8);        
        if (User::where('email',$email)->exists()) {
            $user = User::where('email', $email)->first();
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
            return redirect('/')->with('status', 'password reset email has been sent to '. $email);   
        }else{
            return redirect('/reset-password')->with('status', 'Data did not match, please check again.');
        }
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
