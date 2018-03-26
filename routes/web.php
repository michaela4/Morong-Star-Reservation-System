<?php

/*
|-------------------------------------------------------------------------	-
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/logout', 'SessionsController@destroy');

// FOR SET RESERVATION
Route::get('/set-reservation', 'CustomerController@index');
Route::post('/set-reservation', 'CustomerController@index'); //resetting inputed data

//FOR CUTOMER DETAILS
Route::post('/add-customer', 'ReservationController@store');

//FOR RESERVATION DETAILS
Route::get('/reservation-details', 'CustomerController@reservationDetails');
Route::post('/edit/{id}', 'CustomerController@edit');
Route::post('/delete/{id}', 'ReservationController@delete');

// FOR COTTAGES
Route::get('/rooms-cottages', 'CottageController@show');
Route::post('/edit/cottage/{id}', 'CottageController@edit'); //edit cottage status

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




// FURTHER TESTS HERE
//tests from sarah's codes
Route::get('resDes', function(){
	return view('tests.reservation-details-daytour');
});

Route::get('tian', 'CustomerController@tian');


Route::get('/test', 'CustomerController@test');
Route::get('/modal', 'CustomerController@modal');

// FOR DAYTRIP REGULAR
Route::get('/daytrip-regular', 'DayTripRegularController@index');
Route::post('/save-daytour-regular-package', 'DayTripRegularController@save');



