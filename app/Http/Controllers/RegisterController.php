<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function RegisterForm()
    {

        return view('register');
    }

    public function RegisterCustomer(Request $request)
    {

        $request->validate([
            'fname' => ['required', 'max:50'],
            'lname' => ['required', 'max:50'],
            'email' => ['required', 'max:50'],
            'gender' => ['required'],
            'departmentId' => ['required'],

        ], [
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',
            'email.required' => 'Email is required',

        ]);
        Register::Create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'gender' => $request['gender'],
            'department' => $request['departmentId'],
            'password' => 123,

        ]);

        return redirect('detailPage');
    }



    public function destroy(Request $request)
    {
        $delete = Register::find($request->id);
        $delete->delete();

        return redirect('detailPage');
    }
    public function forceDelete(Request $request)
    {
        try {
            $delete = Register::onlyTrashed()->find($request->id);
            $delete->forceDelete();
        } catch (\Exception $exception) {
            return view('users.notfound');
        }
        return redirect('detailPage');
    }
    public function restore(Request $request)
    {
        Register::onlyTrashed()->find($request->id)->restore();


        return redirect('detailPage');
    }

    public function detailPage()
    {
        //local scope===============
        // $user = Register::user()->get();
        // $trash = Register::user()->onlyTrashed()->get();
        //===Norma;==========================
        $user = Register::user()->get();
        $trash = Register::onlyTrashed()->get();
        return view('detailPage', ['user' => $user], ['trash' => $trash]);
    }
    public function editPage(Request $request)
    {


        $user = Register::where('id', $request->data['id'])->get();


        return response()->json(['user' => $user]);
        // return view('detailPage', ['user' => $user]);
    }
    public function updatePage(Request $request)
    {


        $user = Register::find($request->userid);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->department = $request->departmentId;
        $user->save();

        $users = Register::get();
        $trash = Register::onlyTrashed()->get();

        return response()->json(['users' => $users, 'trash' => $trash]);
        //return redirect('detailPage');
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
