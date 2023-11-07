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
})->name('welcome');

Route::get('/minha-casa_minha-vida', function () {
    return view('minha-casa_minha-vida');
})->name('minha-casa_minha-vida');

Route::get('/obrigado', function () {
    return view('obrigado');
})->name('obrigado');

Route::get('/minha-casa_minha-vida_obrigado', function () {
    return view('mmobrigado');
})->name('minha-casa_minha-vida_obrigado');


//mail routes
Route::resources([
    'email' => SendmailController::class
]);