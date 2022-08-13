<?php
namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\Site\HomeController;
use App\Http\Controllers\V1\Site\Auth\LoginController;
use App\Http\Controllers\V1\Site\Auth\RegisterController;
use App\Http\Controllers\V1\Site\Auth\ActiveCodeController;
use App\Http\Controllers\V1\Site\Auth\ResetPasswordController;
use Spatie\Permission\Models\Permission;


Route::get('/', function () {
    // dd(Permission::whereIn('name', ['employee', 'Accountants-crud'])->get());
    // dd('ok');
    if(Auth::check()){return redirect()->route('home');}
    return redirect('/login');
});

/* -------------------------------------------------------------------------- */
/*                                 auth route                                 */
/* -------------------------------------------------------------------------- */
    Route::controller(LoginController::class)->group(function(){
        Route::get('logout', 'logout')->name('logout');
        Route::get('login', 'showLogin')->name('login')->middleware('guest');
        Route::post('login', 'login')->middleware('guest');

    });

    Route::controller(ActiveCodeController::class)->middleware('guest')->group(function(){

        Route::get('active-code', 'showActiveCode')->name('active-code');
        Route::post('active-code', 'activeCode');

    });


/* -------------------------------------------------------------------------- */
/*                                 ResetPassword route                          */
/* -------------------------------------------------------------------------- */
// Route::controller(ResetPasswordController::class)->middleware('auth')->group(function(){
//     Route::get('verify-phone', 'showPhonePage')->name('reset-password-phone');
//     Route::post('send-code', 'sendCode')->name('reset-password-code');
//     Route::get('code-page', 'showCodePage')->name('reset-password-code-page');
//     Route::post('verify-code', 'verifyCode')->name('verify-code');
//     Route::post('reset-password', 'resetPassword')->name('reset-password');
//     Route::get('reset-password-page', 'showResetPasswordePage')->name('reset-password-page');

// });

/* -------------------------------------------------------------------------- */
/*                                 Home route                                 */
/* -------------------------------------------------------------------------- */
Route::controller(HomeController::class)->middleware('auth')->group(function(){
    Route::get('home', 'home')->name('home');
});




