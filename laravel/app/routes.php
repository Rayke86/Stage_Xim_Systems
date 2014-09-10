<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/about', function()
{
	return View::make('home.about');
});

Route::get('/contact', function()
{
	return View::make('home.contact');
});

Route::get('/photos', function()
{
	return View::make('home.photos');
});

Route::get('/photo', function()
{
	return View::make('home.photo');
});

Route::get('/cons', function()
{
	return View::make('home.cons');
});

Route::get('/', function()
{
	return View::make('home.index');
});


 





