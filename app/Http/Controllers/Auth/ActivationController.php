<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ActivationController extends Controller
{
    public function activate(Request $request)
    {
        $user = User::byActivationColumns($request->email, $request->verifyToken)->firstOrFail();

        $user->update([
            'status' => true,
            'verifyToken' => null
        ]);

        return redirect()->route('captcha')->withSuccess('Activated! Please, confirm us if you`re not a robot.');
    }

    public function showCaptcha()
    {
        $user = User::where('status', true)->where('verifyToken', null)->firstOrFail();
        if ($user) {
            return view('auth.verified');
        } else {
            return view('auth.error');
        }
    }

    public function postCaptcha()
    {
        $token = Input::get('_token');
        $recaptcha = Input::get('g-recaptcha-response');
        return view('auth.login', compact('token', 'recaptcha'));
    }
}
