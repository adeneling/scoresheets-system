<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyAuthController extends LoginController
{
    protected $redirectAfterLogout = '/';

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect($this->redirectAfterLogout);
    }
}
