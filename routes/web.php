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

			Auth::routes();


			Route::get('/home', 'HomeController@index')->name('home');

			Auth::routes();

			Route::get('/home', 'HomeController@index')->name('home');

			Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
			Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

			Auth::routes();

			Route::get('/home', 'HomeController@index')->middleware('auth');




     //Route::resource('users', 'UserController'); // This route Is globally accesible to any user

			Route::group(['middleware' => ['auth']], function () {

			Route::resource('categories', 'CategoryController');

			Route::resource('nominations', 'NominationController');

			Route::resource('votings', 'VotingController');

			 Route::resource('users', 'UserController'); // This route Is globally accesible to any user

			});




	Route::group(['middleware' => ['admin', 'moderator']], function () { // only Admin and moderator Access
	   
	Route::resource('nominationUsers', 'NominationUserController');

 			// users
		Route::get('users', 'UserController@index');
		Route::delete('/users/{id}', 'UserController@destroy');
		Route::match(['put', 'patch'],'/users/{photo}', 'UserController@update');
	


				// categories
		Route::match(['put', 'patch'],'/categories/{photo}', 'CategoryController@update');
		Route::delete('/categories/{id}', 'CategoryController@destroy');
		Route::get('/categories/create', 'CategoryController@create');
		//Route::get('/categories', 'CategoryController@store');

		         //Nomination
		Route::match(['put', 'patch'],'/nominations/{photo}', 'NominationController@update');
		Route::delete('/nominations/{id}', 'NominationController@destroy');

				         //Voting
		Route::match(['put', 'patch'],'/votings/{photo}', 'VotingController@update');
		Route::delete('/votings/{id}', 'VotingController@destroy');







		
		Route::group(['middleware' => ['admin', 'moderator']], function () { // only Admin Access

		Route::resource('settings', 'SettingController');

		Route::resource('roles', 'RoleController');
                               });
        

                 });


