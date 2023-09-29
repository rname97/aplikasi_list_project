<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExplorasiController;
use App\Http\Controllers\ExperienceController;
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
Route::post('/project_image_remove', [ProjectController::class, 'deleteImageProject'])->name('project_image_remove');
Route::post('/projects_store', [ProjectController::class, 'store'])->name('projects.store');


Route::get('/explorasi', [ExplorasiController::class, 'show']);
Route::get('/explorasi_form_add', [ExplorasiController::class, 'viewAddExplorasi']);
Route::post('/addExplorasi', [ExplorasiController::class, 'addExplorasi']);
Route::get('/explorasi_form_edit/{id}', [ExplorasiController::class, 'viewEditExplorasi']);
Route::post('/editExplorasi/{id}', [ExplorasiController::class, 'editExplorasi']);
Route::get('/deleteExplorasi/{id}', [ExplorasiController::class, 'deleteExplorasi']);

Route::get('/explorasi_image_data/{id}', [ExplorasiController::class, 'viewImageListExplorasi']);
Route::post('/explorasi_image_remove', [ExplorasiController::class, 'deleteImageExplorasi'])->name('explorasi_image_remove');
Route::post('/explorasi_store', [ExplorasiController::class, 'store'])->name('explorasi.store');



Route::get('/service', [ServiceController::class, 'show']);
Route::get('/service_form_add', [ServiceController::class, 'viewAddservice']);
Route::post('/addService', [ServiceController::class, 'addService']);
Route::get('/service_form_edit/{id}', [ServiceController::class, 'viewEditService']);
Route::post('/editService/{id}', [ServiceController::class, 'editService']);
Route::get('/deleteService/{id}', [ServiceController::class, 'deleteService']);

// Route::get('/explorasi_image_data/{id}', [ExplorasiController::class, 'viewImageListExplorasi']);
// Route::post('/explorasi_image_remove', [ExplorasiController::class, 'deleteImageExplorasi'])->name('explorasi_image_remove');
// Route::post('/explorasi_store', [ExplorasiController::class, 'store'])->name('explorasi.store');


Route::get('/experience', [ExperienceController::class, 'show']);
Route::get('/experience_form_add', [ExperienceController::class, 'viewAddExperience']);
Route::post('/addExperience', [ExperienceController::class, 'addExperience']);
// Route::get('/service_form_edit/{id}', [ServiceController::class, 'viewEditService']);
// Route::post('/editService/{id}', [ServiceController::class, 'editService']);
// Route::get('/deleteService/{id}', [ServiceController::class, 'deleteService']);
