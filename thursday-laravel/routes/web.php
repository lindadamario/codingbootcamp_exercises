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

// list of all games
Route::get('/games/{orderby?}/{orderway?}', 'GamesController')->name('list of games');;

// detail of one game
Route::get('/game/{id}', 'GamesController@detail')
  ->where('id', '[0-9]+')  // where id consists of one or more digits
  ->name('game detail'); // the name of the route will be 'game detail'

// method chaining
// Route::get(...)->where(...)->where(...)->where(...);


Route::post('/games', function () {

    return 'This is the list of games when accessed with POST';
    
});

Route::get('/authors', function () {

    return redirect('/');
    
});

Route::get('/404', function() {

    $response = response('Hello World', 200);
    $response->header('Content-Type', 'application/json');

    return $response;

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
