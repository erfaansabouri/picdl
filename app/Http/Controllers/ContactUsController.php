<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Mews\Captcha\Captcha;
use UxWeb\SweetAlert\SweetAlert;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('website.contact-us');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email_or_phone' => ['required'],
            'description' => ['required'],
            'captcha' => ['required', 'captcha'],
        ]);

        ContactUs::query()->create($request->except(['captcha']));
        alert()->success('پیام شما دریافت شد به زودی با شما تماس میگیریم!', 'ممنون!');
        return redirect()->back()->with('success', 'پیام شما با موفقیت ارسال شد.');
    }

    public function refreshCaptcha()
    {
        return response()->json([
            'captcha' => \Mews\Captcha\Facades\Captcha::img(),
        ]);
    }
}
