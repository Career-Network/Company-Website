<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'min:8',
            'regex:/[a-z]/',
            'regex:/[A-Z]/',
            'regex:/[0-9]/',
            'confirmed',
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
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
