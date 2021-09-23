<?php

use App\Http\Controllers\MessengerController;
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

// yesteday, I had a discussion with Sazzad vai and soi vai, Soi vai sent me some documentation, tutorials. I was exploring those, and udemy tutorial.

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webhook', [ MessengerController::class, 'webhook' ] );
Route::post('/webhook', [ MessengerController::class, 'webhook_post' ] );


