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

Route::resource('/task', 'TaskController');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('companies', 'CompaniesController@index')->name('companies.index');
    Route::get('players', 'PlayersController@index')->name('players.index');
    Route::get('teams', 'TeamsController@index')->name('teams.index');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/page/{slug}', 'PageController@showslug');

//// TEAMS
//
//Route::get('/teams/index', 'TeamsController@index');
//
//Route::get('/teams/addnewteam', 'TeamsController@addnewteam');
//
//Route::post('/teams/add', 'TeamsController@store'); // API ENDPOINT - ADD A TEAM
//
//Route::get('/teams/{team}', 'TeamsController@show'); // API ENDPOINT - GET A TEAM AND ITS PLAYERS
//
//// PLAYERS
//
//Route::get('/players/addnewplayer', 'PlayersController@addnewplayer');
//
//Route::get('/players/editplayer/{player}', 'PlayersController@editplayer');
//
//Route::post('/players/add/', 'PlayersController@store'); // API ENDPOINT - ADD A PLAYER
//
//Route::patch('/players/{player}', 'PlayersController@update'); // API ENDPOINT - UPDATE A PLAYER
