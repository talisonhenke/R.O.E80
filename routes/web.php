<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendmailController;

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

//new routes

Route::get('/', function () {
    return view('welcome');
});

Route::get('/minha-casa_minha-vida', function () {
    return view('minha-casa_minha-vida');
});

//mail routes
Route::resources([
    'email' => SendmailController::class
]);