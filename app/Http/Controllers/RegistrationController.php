<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegistrationController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function create()
    {
    	return view('register.create');
    }


     public function store()
     {

     	//validate
     	$this->validate(request(),[
     		'name' => 'required|min:3|max:30|',
     		'email' => 'required|email|unique:users,email',
     		'password' => 'required|min:5|confirmed'
     	]);

        $user=new User();

        $user->name=request('name');
        $user->email=request('email');
        $user->password=Hash::make(request('password'));

        $user->save();
     	//save
     	//$user=User::create(request(['name','email',bcrypt('password')]));

     	//login
     	auth()->login($user);

     	//return home
     	return redirect()->home();

     }
}
