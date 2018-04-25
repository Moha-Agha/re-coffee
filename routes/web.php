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
/*
index

create

store

show

edit

update

destroy


HTTP REQUEST TYPES
GET
POST
DELETE
UPDATE
PATCH
*/

// GET /coffee?drinker_id=1
// POST /coffee

Route::get('/', 'DashboardController@index');

Route::post('/coffee', 'CoffeeController@store');

Route::delete('/coffee/{id}', 'CoffeeController@destroy');

Route::post('/report', 'ReportController@store');

Route::get('/report/{id}', 'ReportController@show');

Route::get('/statistik', function () {return "Statistik";});
