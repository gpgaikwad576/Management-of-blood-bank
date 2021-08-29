<?php

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
    return view('pages.aboutus');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Donor/create', 'DonorController@create');

Route::resource('Donor','App\Http\Controllers\DonorController');
Route::resource('Blood','App\Http\Controllers\BloodController');
Route::resource('Consumer','App\Http\Controllers\ConsumerController');
Route::resource('Employee','App\Http\Controllers\EmployeeController');
Route::resource('BRequest','App\Http\Controllers\BRequestController');
Route::resource('Donate','App\Http\Controllers\DonateController');
Route::resource('Suppliedto','App\Http\Controllers\SuppliedtoController');
Route::resource('Collectedby','App\Http\Controllers\CollectedbyController');
Route::resource('Managedby','App\Http\Controllers\ManagedbyController');
Route::resource('Grantedby','App\Http\Controllers\GrantedbyController');