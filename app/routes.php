<?php


Route::get('/', function()
{
	return View::make('index')->with('page_title', "Contact My MP");
});

Route::get('/about', function()
{
	return View::make('about')->with('page_title', "About Us - Contact My MP");
});

Route::get('/contact', function()
{
	return View::make('contact')->with('page_title', "Contact Us - Contact My MP");
});

Route::get('findpolitician', 'PageController@findPolitician');
Route::post('postFindPolitician', 'PageController@postFindPolitician');

Route::get('/select', 'PageController@getSelect');

Route::post('/select', 'PageController@postSelect');

Route::resource('lowerhouse', 'MPController');
Route::resource('upperhouse', 'SenatorController');
Route::controller('lowerhouse', 'MPController');
Route::controller('upperhouse', 'SenatorController');
