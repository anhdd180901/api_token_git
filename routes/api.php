<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//register
Route::get('register', 'Api\RegisterController@register');
Route::post('register', 'Api\RegisterController@register');

//login
Route::get('login', 'Api\LoginController@login');
Route::post('login', 'Api\LoginController@login');

//users
Route::get('users', 'Api\UserController@index');

// //ticket2
// Route::get('ticket','Api\TicketController@getTicket');
