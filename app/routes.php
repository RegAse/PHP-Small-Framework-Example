<?php

/*
	Application Routing (WIP)

	1. Route:get('url','name','Controller@methodincontroller');
	2. Route:post('url','name','Controller@methodincontroller');
*/

if (!Auth::check())
{
	/* This is only for users not logged in */

	Route::get('/','home','HomeController@home');
	
	Route::get('/register', 'register', 'AccountController@register');

	Route::post('/register','register-post','AccountController@register_post');

	Route::get('/login','login','AccountController@login');

	Route::post('/login','login-post','AccountController@login_post');
}
else
{
	/* This is only for logged in users */

	Route::get('/','home','UserController@dashboard');

	// Get the image upload site
	Route::get('/image/upload','image-upload','ImageController@image_upload');

	// Upload the image
	Route::post('/image/upload','image-upload-post','ImageController@image_upload_post');

	Route::get('/account','account','AccountController@account');

	Route::get('/logout','logout','AccountController@logout');
}

/* And these are for everyone */

Route::get('/images','images','ImageController@home');

Route::get('/image/{id}','image','ImageController@image');

Route::get('/profile/{username}','profile','UserController@profile');