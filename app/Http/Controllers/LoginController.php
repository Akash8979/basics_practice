<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function LoginForm()
    {
        return view('login');
    }
    public function Logout()
    {
        if (session()->pull('UserEmail')) {
            return redirect('login');
        } else {
            return redirect('login');
        }
    }
    public function Authenticate(Request $request)
    {
        $user = Register::where('email',  $request->email)->where('Password', $request->password)->count();
        // dd($user);
        if ($user > 0) {
            session(['UserEmail' => $request->email]);
            return redirect('detailPage');
        } else {
            session(['LoginFail' => "Invalid Credentials"]);
            return redirect('login');
        }
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function Authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required',],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect('detailPage');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }
}
