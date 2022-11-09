<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\PersonController;
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

Route::get('person', 'PersonController@index')->name('person.index');

Route::get('person/create', 'PersonController@create')->name('person.create');

Route::post('person/store', 'PersonController@store')->name('person.store');

Route::get('person/show/{name}', [PersonController::class, 'show']);

// Route untuk mengarahkan ke controller StudentController
Route::get('/my-academic/grade/{course}/{task}/{quiz}/{mid_term}/{final}', [StudentController::class, 'myCourse']);

// RISMA PUTRI ANGGRAENI - 200313007

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
