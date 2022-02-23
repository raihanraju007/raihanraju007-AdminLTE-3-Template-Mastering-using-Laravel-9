<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses'          => 'App\Http\Controllers\LoginController@index',
    'as'            => '/',
    'middleware'    => ['guest:'.config('fortify.guard')]

]);

Route::get('/dashboard', [
    'uses'          => 'App\Http\Controllers\DashboardController@index',
    'as'            => '/dashboard',
    'middleware'    => ['auth:sanctum', 'verified']
]);

