<?php

use Illuminate\Support\Facades\Route;
use App\Mail\Newlecmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

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

Route::get('/test', function () {
    $topic = \App\topic::find(60);
    return 'https://drive.google.com/uc?export=download&id=' . explode('/',$topic->lecture)[5];
});

Route::get('/study/{group}/{depart}/{subject}', function () {
    return view('study');
});

Route::get('/study/{group}/{depart}/{subject}', 'TopicController@show');

Route::post('/user/signin', 'UserController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');



Route::get('/topic/edit/{id}', 'TopicController@edit')->middleware('auth')->middleware('admin');


Route::post('/topic/update/{id}', 'TopicController@update')->middleware('auth')->middleware('admin');


Route::get('/topic/delete/{id}', 'TopicController@destroy')->middleware('auth')->middleware('admin');



Route::get('/topic/add', 'TopicController@create')->middleware('auth')->middleware('admin');



Route::post('/topic/save', 'TopicController@store')->middleware('auth')->middleware('admin');



Route::get('/mail', function () {
    Mail::to('y@y.com')->send(new Newlecmail());
    return new Newlecmail();
});
