<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/
Route::controller('home');

///////// This Routes belongs to RATINGS /////////
 Route::group(array('before' => 'auth'), function()
 {
	Route::get('ratings/(:any)',array('as'=>'rating','uses'=>'ratings@index'));
	Route::post('ratings/(:all)',array('before'=>'csrf','uses'=>'ratings@ratings'));
 });

///////// These Routes belongs to PUBS /////////
Route::get('pub/(:any)',array('as'=>'pub','uses'=>'pubs@index'));
Route::post('pub/(:all)',array('before'=>'csrf','uses'=>'pubs@comment'));
Route::get('list_pubs/top20',array('as'=>'list_pubs','uses'=>'list_pubs@top20'));
Route::get('list_pubs/nearestPubs',array('as'=>'list_pubs','uses'=>'list_pubs@nearestPubs'));

///////// These Routes belongs to list_pubs /////////
Route::get('list_pubs/categories', 'list_pubs@categories');
Route::get('list_pubs/top_list_service', 'list_pubs@top_list_service');
Route::get('list_pubs/top_list_atmosphere', 'list_pubs@top_list_atmosphere');
Route::get('list_pubs/top_list_food', 'list_pubs@top_list_food');
Route::get('list_pubs/top_list_place', 'list_pubs@top_list_place');
Route::get('list_pubs/top_list_assortments', 'list_pubs@top_list_assortments');
Route::get('list_pubs/afterworks', 'list_pubs@afterwork');
Route::get('list_pubs/quiz', 'list_pubs@quiz');

///////// These Routes belongs to SEARCH /////////
Route::post('search/index', array('before'=>'csrf', 'uses'=>'search@index'));

///////// These Routes belongs to ADMIN /////////
Route::get('admins', array('as'=>'admins', 'uses'=>'admins@index'));
Route::get('admins/create', array('as'=>'create_pub','uses'=>'admins@create'));
Route::post('admins/create', array('uses'=>'admins@create'));

//Update//
Route::get('admins/edit', array('as'=>'edit_pub','uses'=>'admins@edit'));
Route::get('admins/edit/(:any)', array('as'=>'edit','uses'=>'admins@edit_pub'));
Route::put('admins/update', array('uses'=>'admins@update'));


Route::get('home/json', array('as' => 'json_test', 'uses' => 'pubs@fetch_json'));


/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/
Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});



