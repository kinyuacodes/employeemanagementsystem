<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\DepartmentController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//users
Route::resource('users',UserController::class);
//Countries
Route::resource('countries',CountryController::class);
//States
Route::resource('states',StateController::class);
//city
Route::resource('cities',CityController::class);
//Department
Route::resource('departments',DepartmentController::class);



//Any Route match any /any
Route::get('{any}',function()
{
    return view('employee.index');

})->where('{any}','.*');
