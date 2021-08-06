<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/signup', function () {
//     return view('signup');
// });

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::get('contact','ContactController@getContact');  
Route::post('contact', 'ContactController@saveContact');

// Route::get('signup','SignupController@index');  
// Route::post('post-login', 'SignupController@postLogin');

Route::get('signup', [SignupController::class, 'index'])->name('login');
Route::post('post-login', [SignupController::class, 'postLogin'])->name('login.post'); 

// Route::get('registration', [SignupController::class, 'registration'])->name('register');
Route::post('post-registration', [SignupController::class, 'postRegistration'])->name('register.post'); 


