<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserDashboardController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'show']);
Route::get('/kategori_add', [KategoriController::class, 'viewAddKategori']);
Route::post('/submitform', [KategoriController::class, 'addKategori'])->name('submitform');
Route::get('/kategori_edit/{id}', [KategoriController::class, 'viewEditKategori']);
Route::post('/updateKategori/{id}', [KategoriController::class, 'editKategori']);
Route::get('/kategori_delete/{id}', [KategoriController::class, 'deleteKategori']);


Route::get('/skill', [SkillController::class, 'show']);
Route::get('/skill_add', [SkillController::class, 'viewAddSkill']);
Route::post('/addSkill', [SkillController::class, 'addSkill'])->name('addSkill');
Route::get('/skill_edit/{id}', [SkillController::class, 'viewEditSkill']);
Route::post('/updateSkill/{id}', [SkillController::class, 'editSkill']);
Route::get('/skill_delete/{id}', [SkillController::class, 'deleteSkill']);


Route::get('/project', [ProjectController::class, 'show']);
Route::get('/project_form_add', [ProjectController::class, 'viewAddProject']);
Route::post('/addProject', [ProjectController::class, 'addProject']);
Route::get('/project_form_edit/{id}', [ProjectController::class, 'viewEditProject']);
Route::post('/editProject/{id}', [ProjectController::class, 'editProject']);
Route::get('/deleteProject/{id}', [ProjectController::class, 'deleteProject']);


Route::get('/project_image_data/{id}', [ProjectController::class, 'viewImageListProject']);

Route::post('projects_media', [ProjectController::class, 'storeMedia'])->name('projects.storeMedia');
Route::post('projects/store', [ProjectController::class, 'store'])->name('projects.store');

