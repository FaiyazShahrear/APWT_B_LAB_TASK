<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify')->name('login.verify');
Route::get('/logout', 'LogoutController@index')->name('logout');
Route::get('/registration','RegistrationController@index')->name('registration');
Route::post('/registration','RegistrationController@registration')->name('registration');

Route::get('/home', 'HomeController@index')->name('home');

