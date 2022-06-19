<?php

use Illuminate\Support\Facades\Route;

Route::middleware([])->group(function () {
    Route::get('', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('about-us', [\App\Http\Controllers\AboutUsController::class, 'index'])->name('about-us');
    Route::get('contact-us', [\App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');
    Route::post('contact-us', [\App\Http\Controllers\ContactUsController::class, 'store'])->name('contact-us.store');
    Route::get('refresh-contact-us-captcha', [\App\Http\Controllers\ContactUsController::class, 'refreshCaptcha'])->name('contact-us.refresh-captcha');
});
