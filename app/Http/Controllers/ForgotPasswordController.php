<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ForgotPasswordController extends Controller
{
    public function forgot_view(){

        return view('forgot-password');
    }

    public function password_email(Request $request){
        $request->validate(['email' => 'required|email:dns']);
 
        $status = Password::sendResetLink(
            $request->only('email')
        );
 
        return $status === Password::RESET_LINK_SENT
            ? view('info_forgot')
            : back()->withErrors(['email' => __($status)]);
    }

    public function password_reset($token){
        return view('reset-password', ['token' => $token]);
    }

    public function password_update(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email:dns',
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
            'password_confirmation' => 'same:password'
        ]);
    
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
    
                $user->save();
    
                event(new PasswordReset($user));
            }
        );
        return $status === Password::PASSWORD_RESET
            ? view('info_reset')
            : back()->withErrors(['email' => [__($status)]]);
    }
}
