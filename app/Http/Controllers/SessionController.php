<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function destroy()
    {
    	
    	auth()->logout();

    	return redirect()->home();

    }


    public function create()
    {

        return view('session.create');

    }

    public function authenticate()
    {
//        echo bcrypt(request('password')).'<br>';
//        echo bcrypt(request('password'));
//        dd(auth()->attempt(['email' => request('email'), 'password' => Hash::make(request('password'))]));
    	if (!(auth()->attempt(['email' => request('email'), 'password' => request('password')]))) {
            return back()->withErrors([
                'message'=> 'Please check your credentials'
            ]);
        }
        
        
        //Authentication failed...
    	 return redirect()->home();

    }
}
