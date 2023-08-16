<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'show']);
Route::get('/kategori_add', [KategoriController::class, 'viewAddKategori']);
Route::post('/submitform', [KategoriController::class, 'addKategori'])->name('submitform');
Route::get('/kategori_edit/{id}', [KategoriController::class, 'viewEditKategori']);
Route::post('/updateKategori/{id}', [KategoriController::class, 'editKategori']);
Route::get('/kategori_delete/{id}', [KategoriController::class, 'deleteKategori']);


Route::get('/project', [ProjectController::class, 'show']);
Route::get('/project_add', [ProjectController::class, 'viewAddProject']);
Route::post('/addProject', [ProjectController::class, 'addProject']);
Route::get('/kategori_edit/{id}', [ProjectController::class, 'viewEditProject']);
Route::post('/updateProject/{id}', [ProjectController::class, 'editProject']);
Route::get('/kategori_delete/{id}', [ProjectController::class, 'deleteProject']);

