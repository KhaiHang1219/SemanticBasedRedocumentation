<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\MethodsController;
use App\Http\Controllers\VariablesController;
use App\Http\Controllers\DependenciesController;
use App\Http\Controllers\MetricsController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [FilesController::class, 'index'])->name('fileupload.index');
Route::post('/multiple-file-upload', [FilesController::class, 'multipleUpload'])->name('multiple.fileupload');
// Route::get('/downloadMethodFiles', [FilesController::class, 'downloadFiles']);
// Route::get('/downloadVariableFiles', [FilesController::class, 'downloadVariableFiles']);
// Route::get('/downloadDependencyFiles', [FilesController::class, 'downloadDependencyFiles']);
// Route::get('/downloadMetricFiles', [FilesController::class, 'downloadMetricFiles']);

Route::get('/Method', [MethodsController::class, 'index']);
Route::post('/searchMethodByClass', [MethodsController::class, 'search']);

Route::get('/Variable', [VariablesController::class, 'index']);
Route::post('/searchVariableByClass', [VariablesController::class, 'search']);

Route::get('/Dependency', [DependenciesController::class, 'index']);
Route::post('/searchDependencyByClass', [DependenciesController::class, 'search']);

Route::get('/Metric', [MetricsController::class, 'index']);

Route::view('/generateGraph', 'generate-graph');