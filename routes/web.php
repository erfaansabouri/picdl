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
    Route::get('blog-posts/{id}', [\App\Http\Controllers\BlogPostController::class, 'show'])->name('blog-posts.show');
    Route::get('rules', [\App\Http\Controllers\RulesController::class, 'index'])->name('rules');
    Route::get('credit-packages', [\App\Http\Controllers\CreditPackageController::class, 'index'])->name('credit-packages');
    Route::get('faqs', [\App\Http\Controllers\FaqController::class, 'index'])->name('faqs');
    Route::get('contact-us', [\App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');
    Route::post('contact-us', [\App\Http\Controllers\ContactUsController::class, 'store'])->name('contact-us.store');
    Route::get('refresh-contact-us-captcha', [\App\Http\Controllers\ContactUsController::class, 'refreshCaptcha'])->name('contact-us.refresh-captcha');

    Route::middleware([])->prefix('sources')->group(function () {

        Route::middleware([])->prefix('shutterstock')->group(function () {
            Route::get('/', [\App\Http\Controllers\ShutterStockController::class, 'index'])->name('sources.shutter-stock.index');
            Route::get('/{shutterstock_id}', [\App\Http\Controllers\ShutterStockController::class, 'show'])->name('sources.shutter-stock.show');
            Route::get('download-via-credit/{shutterstock_id}', [\App\Http\Controllers\ShutterStockController::class, 'downloadViaCredit'])->name('sources.shutter-stock.download-via-credit');
        });

        Route::get('shutter-test', [\App\Http\Controllers\ShutterStockController::class, 'test'])->name('shutter-test');
        Route::get('shutter-test-api', [\App\Http\Controllers\ShutterStockController::class, 'testApi'])->name('shutter-test-api');
        Route::get('shutter-test-show-api', [\App\Http\Controllers\ShutterStockController::class, 'showSingleApi'])->name('shutter-test-show-api');
    });


    Route::middleware([])->prefix('payment')->group(function () {
        Route::get('send', [\App\Http\Controllers\PaymentController::class , 'send'])->name('payment.send');
        Route::get('verify', [\App\Http\Controllers\PaymentController::class , 'verify'])->name('payment.verify');
    });

});


Route::middleware(['auth:web'])->prefix('profile')->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\ProfileController::class, 'dashboard'])->name('profile.dashboard');
    Route::get('transactions', [\App\Http\Controllers\ProfileController::class, 'transactions'])->name('profile.transactions');
    Route::get('user-details', [\App\Http\Controllers\ProfileController::class, 'userDetails'])->name('profile.user-details');
    Route::put('user-details', [\App\Http\Controllers\ProfileController::class, 'updateDetails'])->name('profile.update-details');
    Route::get('tickets', [\App\Http\Controllers\ProfileController::class, 'tickets'])->name('profile.tickets');
    Route::post('tickets/store', [\App\Http\Controllers\ProfileController::class, 'storeTicket'])->name('profile.tickets.store');

});
