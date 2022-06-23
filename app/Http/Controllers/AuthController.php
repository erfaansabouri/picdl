<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getPhoneNumberForm()
    {
        return view('website.auth.get-phone-number');
    }

    public function postPhoneNumber(Request $request)
    {
        $normalizedPhoneNumber = normalizePhoneNumber($request->phone_number);
        // if user already exists and already set password
        if($user = User::query()->where('phone_number', $normalizedPhoneNumber)->whereNotNull('password')->first())
        {
            // return to page login with password
            return '1';
        }
        else
        {
            $user = User::query()->firstOrCreate([
                'phone_number' => $normalizedPhoneNumber,
            ]);
            // send otp
            $otp = rand(1000,9999);
            $user->otp = $otp;
            $user->save();
            // return to page submit otp
            return redirect()->route('auth.get-otp-form', ['token' => encrypt($user)]);
        }
    }

    public function getOtpForm(Request $request)
    {
        $user = decrypt($request->token);
        return view('website.auth.get-otp', compact('user'));
    }

    public function postOtp(Request $request)
    {
        $user = User::query()->findOrFail($request->user_id);
        $otp = $request->otp;

        if($user->otp != $otp)
        {
            return redirect()->back()->withErrors(['invalid' => 'کد نا معتبر است.']);
        }

        if(empty($user->password))
        {
            return redirect()->route('auth.get-new-password', ['token' => encrypt($user)]);
        }

        Auth::login($user);
        return redirect()->route('home');
    }

    public function getNewPasswordForm(Request $request)
    {
        $user = decrypt($request->token);
        return view('website.auth.get-new-password', compact('user'));
    }

    public function skipNewPasswordAndLogin(Request $request)
    {
        $user = decrypt($request->token);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
