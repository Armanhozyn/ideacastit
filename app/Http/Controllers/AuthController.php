<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){

        return view('backend.signin');
    }

    public function log(Request $request){
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);

        // $auth = DB:: ::where('email', '=', $request->email)->first();
        $auth = DB::table('users')->where('email', $request->email)->first();
        if ($auth) {
            if (Hash::check($request->password, $auth->password)) {
                $request->session()->put("LoggedIn", true);
                $request->session()->put("AdminId", $auth->id);
                $request->session()->put("AdminName", $auth->name);
                $request->session()->put("AdminEmail", $auth->email);
                $request->session()->put("AdminRole", 1);
                // dd($auth);
                return redirect()->route('dashboard')->with("success", "Welcome To Educative It Panel");
            } else {
                return back()->with('fail', "Invalid Password!!");
            }
        } else {
            return back()->with('fail', "No account found for thin emai!!");
        }
    }

    public function AdminLogout()
    {
        if (session()->has('LoggedIn')) {
            session()->pull("LoggedIn");
            session()->pull("AdminId");
            session()->pull("AdminName");
            session()->pull("AdminEmail");
            session()->pull("AdminRole");
            return redirect()->route('login')->with('success', "Log Out Successful");
        }
    }
}
