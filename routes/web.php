<?php

use App\Http\Controllers\DuenioController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/duenios',[DuenioController::class,'index'])->name('index');

Route::get('/duenios/crear',[DuenioController::class,'create'])->name('create');


