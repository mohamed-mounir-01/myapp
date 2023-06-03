<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Logincontroller;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(Homecontroller::class)->group(function(){
    Route::get('/', 'home')->name('app_home');
    Route::get('/about', 'about')->name('app_about');
    Route::match(['get', 'post'], '/dashboard', 'dashboard')->middleware('auth')->name('app_dashboard');
    Route::get('/services//homecleaning', 'homecleaning')->name('app_homecleaning');
    Route::get('/services//babysitting', 'babysitting')->name('app_babysitting');
    Route::get('/services//homerepair', 'homerepair')->name('app_homerepair');
    Route::get('/services//gardener', 'gardener')->name('app_gardener');
    Route::get('/services//delivery', 'delivery')->name('app_delivery');
    Route::get('/services//health', 'health')->name('app_health');
    Route::get('/contactus', 'contactusbefore')->name('app_contactusbefore');
    Route::post('/contactus', 'contactusafter')->name('app_contactusafter');
    Route::get('/admin', 'adminhome')->name('app_adminhome')->middleware('is_admin');
    Route::get('/data', 'data')->name('data');
    Route::get('/data2', 'data2')->name('data2');
    Route::get('/inbox', 'inbox')->name('inbox');
    Route::get('/compose', 'compose')->name('compose');
    Route::get('/booking', 'booking')->name('booking');
    Route::post('/booking', 'booking')->name('booking');
    Route::get('/store', 'store')->name('store');
    Route::post('/store', 'store')->name('store');
});

Route::controller(Logincontroller::class)->group(function(){
    Route::get('/logout', 'logout')->name('app_logout');
    Route::post('/existEmail', 'existEmail')->name('app_exist_email');
    Route::match(['get', 'post'], '/activation_code/{token}','activationCode') ->name('app_activation_code');
    Route::get('/user_checker', 'userChecker')->name('app_user_checker');
    Route::get('/resend_activation_code/{token}', 'resendActivationCode') ->name('app_resend_activation_code');
    Route::get('/activation_account_link/{token}', 'activationAccountLink')->name('app_activation_account_link');
    Route::match(['get', 'post'], '/activation_account_change_email/{token}', 'activationAccountChangeEmail')->name('app_activation_account_change_email');
    Route::match(['get', 'post'], '/forgot_password', 'forgotPassword')->name('app_forgot_password');
    Route::match(['get', 'post'], '/change_password/{token}', 'changePassword')->name('app_change_password');
});


