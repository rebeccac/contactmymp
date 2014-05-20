<?php


Route::get('/', function()
{
	return View::make('index')->with('page_title', "Contact My MP");
});

Route::get('about', array('as' => 'about', 'uses' => 'PageController@getAbout'));
Route::get('contact', array('as' => 'contact', 'uses' => 'PageController@getContact'));
Route::post('contact', array('as' => 'contact', 'uses' => 'PageController@postContact'));
Route::get('thankyou', array('as', 'thankyou', 'uses' => 'PageController@getThankYou'));
Route::post('mpemail', array('as' => 'mpemail', 'uses' => 'MPController@mpemail'));
Route::post('senatoremail', array('as' => 'senatoremail', 'uses' => 'SenatorController@senatoremail'));
Route::get('findpolitician', array('as' => 'findpolitician', 'uses' => 'PageController@findPolitician'));
Route::post('postFindPolitician', 'PageController@postFindPolitician');
Route::get('ministers', array('as' => 'ministers', 'uses' => 'PageController@getMinisters'));
Route::get('/select', 'PageController@getSelect');
Route::post('/select', 'PageController@postSelect');
Route::resource('lowerhouse', 'MPController');
Route::resource('upperhouse', 'SenatorController');
Route::controller('lowerhouse', 'MPController');
Route::controller('upperhouse', 'SenatorController');
