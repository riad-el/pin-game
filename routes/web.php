<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameplayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[GameplayController::class,'Affichegame']);

Route::post('/jouer',[GameplayController::class,'Verifier'])->name("submit");

