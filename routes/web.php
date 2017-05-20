<?php

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

Route::get('about', function(){
	return view('about');
});



Route::get('home', function(){
	return view('home');
});

Route::get('action', function(){
	return view('action');
});

Route::get('datatable', ['uses'=>'PostController@datatable']);
Route::get('datatable/getposts', ['as'=>'datatable.getposts','uses'=>'PostController@getPosts']);




Route::get('usersv', ['uses'=>'UsersvController@usersverwaltung']);
Route::get('usersv/getUsersv', ['as'=>'usersverwaltung.getUsersv','uses'=>'UsersvController@getUsersv']);


Route::get('student', ['uses'=>'StudentController@datatable']);
Route::get('student/getstudent', ['as'=>'datatable.getstudent','uses'=>'StudentController@getstudent']);


// route to show the login form
Route::get('login', array('uses' => 'Controller@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'Controller@doLogin'));
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/contact', 'contactController@index')->name('contact');
Auth::routes();
Route::get('/contact', 'contactController@index')->name('contact');


Route::get('insertproduct', function(){
	return view('insertproduct');
});
Route::post('/insert', 'InsertProductsController@insert');





Route::get('rest', function(){
	return view('rest');
});
Route::post('/insertrest', 'Rest@insert');
