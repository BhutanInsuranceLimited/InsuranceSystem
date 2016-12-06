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
Route::get('/', function(){
    return view('public.login');
});
//Route::post('login', 'Auth\LoginController@postLogin');
Auth::routes();

Route::get('/home', 'HomeController@index');
