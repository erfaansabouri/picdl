<?php

use Illuminate\Support\Facades\Route;

Route::middleware([])->prefix('auth')->group(function () {
    Route::any('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])
        ->name('auth.logout');

    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'getPhoneNumberForm'])
        ->name('auth.get-phone-number-form')
        ->middleware('guest');

    Route::post('/post-phone-number', [\App\Http\Controllers\AuthController::class, 'postPhoneNumber'])
        ->name('auth.post-phone-number')
        ->middleware('guest');

    Route::get('/login-otp', [\App\Http\Controllers\AuthController::class, 'getOtpForm'])
        ->name('auth.get-otp-form')
        ->middleware('guest');

    Route::post('/post-otp', [\App\Http\Controllers\AuthController::class, 'postOtp'])
        ->name('auth.post-otp')
        ->middleware('guest');

    Route::get('/get-login-with-password', [\App\Http\Controllers\AuthController::class, 'getLoginWithTokenAndPassword'])
        ->name('auth.get-login-with-token-and-password')
        ->middleware('guest');

    Route::post('/post-login-with-password', [\App\Http\Controllers\AuthController::class, 'postLoginWithTokenAndPassword'])
        ->name('auth.post-login-with-token-and-password')
        ->middleware('guest');

    Route::get('/login-new-password', [\App\Http\Controllers\AuthController::class, 'getNewPasswordForm'])
        ->name('auth.get-new-password-form')
        ->middleware('guest');

    Route::get('/post-skip-new-password-and-login', [\App\Http\Controllers\AuthController::class, 'skipNewPasswordAndLogin'])
        ->name('auth.skip-new-password-and-login')
        ->middleware('guest');

    Route::post('/post-set-new-password', [\App\Http\Controllers\AuthController::class, 'postSetNewPassword'])
        ->name('auth.post-set-new-password')
        ->middleware('guest');

    Route::get('/get-login-with-phone-number-and-otp', [\App\Http\Controllers\AuthController::class, 'getLoginWithPhoneNumberAndOtp'])
        ->name('auth.get-login-with-phone-number-and-otp')
        ->middleware('guest');


    Route::get('forget-password/get-otp/{token}', [\App\Http\Controllers\AuthController::class, 'forgetPasswordGetOtp'])
        ->name('auth.forget-password-get-otp')
        ->middleware('guest');


    Route::get('/logged-in-successfully', [\App\Http\Controllers\AuthController::class, 'loggedInSuccessfully'])
        ->name('auth.logged-in-successfully')
        ->middleware('guest');

});


Route::middleware([])->group(function () {
    Route::get('', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('about-us', [\App\Http\Controllers\AboutUsController::class, 'index'])->name('about-us');
    Route::get('rules', [\App\Http\Controllers\RulesController::class, 'index'])->name('rules');
    Route::get('credit-packages', [\App\Http\Controllers\CreditPackageController::class, 'index'])->name('credit-packages');
    Route::get('faqs', [\App\Http\Controllers\FaqController::class, 'index'])->name('faqs');
    Route::get('contact-us', [\App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');
    Route::post('contact-us', [\App\Http\Controllers\ContactUsController::class, 'store'])->name('contact-us.store');
    Route::get('refresh-contact-us-captcha', [\App\Http\Controllers\ContactUsController::class, 'refreshCaptcha'])->name('contact-us.refresh-captcha');
});
