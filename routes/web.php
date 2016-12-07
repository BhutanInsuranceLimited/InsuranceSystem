<?php
Route::get('home', function() {
	return view('public.dashboard');
});

Route::get('prospect-registration', function(){
    return view('insurance.CRM.prospect_registration');
});
Route::get('leads', function(){
	return view('insurance.Leads.lead');
});

//Route::post('login', 'Auth\LoginController@postLogin');
// Authentication routes...
Route::get('login', 'AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
    'password' => 'Auth\PasswordController',
]);