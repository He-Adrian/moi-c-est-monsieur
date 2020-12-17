<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RipostCardController;
use App\Http\Controllers\AttackCardController;
use App\Http\Controllers\AttackRipostController;

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
    return view('home');
});

Route::get('/game', function () {
    return view('game');
});

Route::get('/attack_ripost', [AttackRipostController::class, 'index']);


Route::get('/victory', function () {
    return view('victory');
});

Route::get('/defeat', function () {
    return view('defeat');
});

Route::resource('ripost_cards', RipostCardController::class );
Route::resource('attack_cards', AttackCardController::class );
