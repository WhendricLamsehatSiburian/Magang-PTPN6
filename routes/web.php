<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KaryawanController;

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
    // LOGIN 
Route::get('/', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'authenticate']);
    //LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/DataKaryawan',[ContentController::class,'index'])->middleware('Role:Super Admin');
Route::get('/unit',[ContentController::class,'unit']);

//SDM
Route::get('/ContentSDM',[ContentController::class,'SDM'])->middleware('Role:Admin SDM');
Route::get('/unitsdm',[ContentController::class,'SDMunit'])->middleware('Role:Admin SDM');
//UNIT
Route::get('/Adminunit',[ContentController::class,'unitusaha'])->middleware('Role:Admin Unit Usaha');
Route::get('/Unitusaha',[ContentController::class,'unitunit'])->middleware('Role:Admin Unit Usaha');

//Karyawan
Route::get('/informasi',[ContentController::class,'informasi'])->middleware('Role:Karyawan');






Route::get('/karyawan',function(){
    return view('karyawan.index');
});

Route::resource('unitajax',UnitController::class);
Route::resource('userajax',KaryawanController::class);