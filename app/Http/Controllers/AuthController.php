<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getPhoneNumberForm()
    {
        return view('website.auth.get-phone-number');
    }

    public function postPhoneNumber(Request $request)
    {
        $request->validate([
            'phone_number' => ['required', 'regex:'. User::IRAN_PHONE_NUMBER_REGEX],
        ]);
        $normalizedPhoneNumber = normalizePhoneNumber($request->phone_number);
        if($user = User::query()->where('phone_number', $normalizedPhoneNumber)->whereNotNull('password')->first())
        {
            $token = encrypt($user);
            return redirect()->route('auth.get-login-with-token-and-password', ['token' => $token]);
        }
        else
        {
            $user = User::query()->firstOrCreate([
                'phone_number' => $normalizedPhoneNumber,
            ]);
            $otp = rand(1000,9999);
            $user->otp = $otp;
            $user->save();
            return redirect()->route('auth.get-otp-form', ['token' => encrypt($user)]);
        }
    }

    public function getLoginWithTokenAndPassword(Request $request)
    {
        return view('website.auth.get-enter-password-to-login');
    }

    public function postLoginWithTokenAndPassword(Request $request)
    {
        $request->validate([
            'token' => ['required'],
            'password' => ['required'],
        ]);

        $user = decrypt($request->token);
        if(Hash::check($request->password, $user->password))
        {
            Auth::login($user);
            return redirect()->route('auth.logged-in-successfully');
        }
        return redirect()->back()->withErrors(['invalid' => 'رمز نا معتبر است.']);
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
            return redirect()->route('auth.get-new-password-form', ['token' => encrypt($user)]);
        }

        Auth::login($user);
        return redirect()->route('auth.logged-in-successfully');
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
        return redirect()->route('auth.logged-in-successfully');
    }

    public function postSetNewPassword(Request $request)
    {
        $request->validate([
            'password' => ['required' ,'confirmed'],
            'token' => ['required']
        ]);
        $user = decrypt($request->token);
        $user->password = bcrypt($request->password);
        $user->save();
        Auth::login($user);
        return redirect()->route('auth.logged-in-successfully');
    }

    public function loggedInSuccessfully()
    {
        return view('website.auth.logged-in-successfully');
    }

    public function getLoginWithPhoneNumberAndOtp(Request $request)
    {
        $request->validate([
            'phone_number' => ['required', 'regex:'.User::IRAN_PHONE_NUMBER_REGEX],
        ]);
        $normalizedPhoneNumber = normalizePhoneNumber($request->phone_number);
        $user = User::query()->firstOrCreate([
            'phone_number' => $normalizedPhoneNumber,
        ]);
        $otp = rand(1000,9999);
        $user->otp = $otp;
        $user->save();
        return redirect()->route('auth.get-otp-form', ['token' => encrypt($user)]);
    }

    public function forgetPasswordGetOtp($token)
    {
        $user = decrypt($token);
        $otp = rand(1000,9999);
        $user->password = null;
        $user->otp = $otp;
        $user->save();
        return redirect()->route('auth.get-otp-form', ['token' => $token]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
