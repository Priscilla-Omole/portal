<?php

use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('portal',[VisitorController::class, 'index']);
//Route::get('/portal/{id}/view','VisitorController@view')->name('visitor.view');
//Route::post('/portal','VisitorController@store')->name('visitor.store');
