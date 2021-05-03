<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UnitController2;

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
Route::resource('unit', UnitController::class);
Route::get('/unit2', [UnitController2::class]);
route::resource('/unitcontr', [aagcontroller::class]);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/14thaag', function (){
    return view('unit.index');
});
Route::get('/leadership', function (){
    return view('unit.leadership');
});
Route::get('/viking13', function (){
    return view('unit.one-three');
});
Route::get('/roster', function (){
    return view('unit.roster');
});
Route::get('/unitlist', function (){
    return view('unit.unitlist');
});
