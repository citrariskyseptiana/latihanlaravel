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

Route::group(['middleware'=>'auth'],function(){
	Route::get('/', function () {
    return view('welcome');
	});

	//manajemen sumber pemasukan
	Route::get('sumber-pemasukan','Sumber_controller@index');
	Route::get('sumber-pemasukan/add','Sumber_controller@add');
	Route::post('sumber-pemasukan/add','Sumber_controller@store');
	Route::get('sumber-pemasukan/{id}','Sumber_controller@edit');
	Route::put('sumber-pemasukan/{id}','Sumber_controller@update');
	Route::delete('sumber-pemasukan/{id}','Sumber_controller@delete');

	//Manage Pemasukan
	Route::get('pemasukan','Pemasukan_controller@index');
	Route::get('pemasukan/add','Pemasukan_controller@add');
	Route::post('pemasukan/add','Pemasukan_controller@store');
	Route::get('pemasukan/{id}','Pemasukan_controller@edit');
	Route::put('pemasukan/{id}','Pemasukan_controller@update');
	Route::delete('pemasukan/{id}','Pemasukan_controller@delete');
});

Route::get('add-user',function(){
	\DB::table('users')->insert([
	'name'=>'admin',
	'email'=>'admin@gmail.com',
	'password'=>bcrypt('123'),
	'created_at'=>date('Y-m-d H:i:s'),
	'updated_at'=>date('Y-m-d H:i:s')
	]);
});

Auth::routes();

Route::get('/home', function(){
	return redirect('/');
});
