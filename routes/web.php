<?php

use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    $menu = DB::table('menu')->get();
    return view('home',compact('menu'));
})->name('home');


Route::get('/pre_test', 'App\Http\Controllers\TestController@pre_test')->name('pre_test');
Route::post('/send_pretest', 'App\Http\Controllers\TestController@send_pretest')->name('send_pretest');

Route::get('/post_test', 'App\Http\Controllers\TestController@post_test')->name('post_test');
Route::post('/send_posttest', 'App\Http\Controllers\TestController@send_posttest')->name('send_posttest');

Route::get('/quiz', 'App\Http\Controllers\TestController@quiz')->name('quiz');
Route::post('/send_quiz', 'App\Http\Controllers\TestController@send_quiz')->name('send_quiz');

Route::get('/answer', 'App\Http\Controllers\TestController@answer')->name('answer');





