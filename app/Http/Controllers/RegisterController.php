<?php

namespace App\Http\Controllers;

use session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index(){
        return view('register');
    }

    public function store(Request $request){
        
        
        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]*$/',
            'email' => 'required|email:dns|unique:users',
            'number' => 'required',
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
            'confirm_password' => 'required|same:password'
        ]);
        
        $validatedData['password']=Hash::make($validatedData['password']);
        
        User::create($validatedData);

        $request->session()->flash('success','Registration successful! Please login!');
        
        return redirect('/login');
    }
}
