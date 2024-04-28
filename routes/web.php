<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\Document\DocumentController;
use App\Http\Controllers\DossierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgressActionController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/departements', DepartementController::class);

Route::get('/typedocument/{DepartementId}',[ProgressActionController::class, 'selectTypeDocument'])->name('typedocument.show');
Route::get('progressfolder/{DepartementId}/{TypeDocumentId}', [ProgressActionController::class, 'selectAnnee'])->name('anne.show');
Route::get('progressfolderYear/{DepartementId}/{TypeDocumentId}/{AnnneId}', [ProgressActionController::class, 'exploreFolder'])->name('folder.explore');
Route::resource('create/folder', DossierController::class);
Route::post('/document/create', [DocumentController::class, 'store'])->name('document.store');
Route::get('/search', [DocumentController::class, 'search']);
