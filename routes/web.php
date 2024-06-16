<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\Render\ZippController;
use App\Http\Controllers\ProgressActionController;
use App\Http\Controllers\Rapport\RapportController;
use App\Http\Controllers\Document\DocumentController;
use App\Http\Controllers\GestionSubDepartementController;
use App\Http\Controllers\Filter\DocumentController as FilterDocumentController;

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
Route::get('/typedocument/{DepartementId}',[ProgressActionController::class, 'listetypedocument'])->name('typedocument.show');
Route::get('progressfolder/{DepartementId}/{TypeDocumentId}', [ProgressActionController::class, 'listeannee'])->name('anne.show');
Route::get('progressfolderYear/{DepartementId}/{TypeDocumentId}/{AnnneId}', [ProgressActionController::class, 'exploreFolder'])->name('folder.explore');
Route::resource('create/folder', DossierController::class);
Route::post('/document/create', [DocumentController::class, 'store'])->name('document.store');
Route::get('/search', [DocumentController::class, 'search']);
Route::get('/typedepartement', [ProgressActionController::class, 'typedepartement'])->name('folder-progress');
Route::get('/gestion/subdepartement/{departementid}', [GestionSubDepartementController::class, 'show'])->name('gestion.subdepartement');
Route::post('/gestion/typedocoument/store', [GestionSubDepartementController::class, 'store'])->name('dep.typedoc.store');
Route::delete('/gestion/typedocoument/delete/{id}', [GestionSubDepartementController::class, 'destroy'])->name('dep.typedoc.destroy');
Route::get('/detail/dossier/{id}',  [DossierController::class, 'show'])->name('dossier.show');
Route::get('/gestion/dossiers', [DossierController::class,'index'])->name('dossier.index');
Route::get('/dossier/{id}', [DossierController::class,'destroy'])->name('dossier.destroy');
Route::get('/listedesdocuments', [DocumentController::class,'index'])->name('document.index');
Route::resource('/users', UserController::class);
Route::resource('/roles', RoleController::class);
Route::resource('/annee', AnneController::class);
Route::get('/listedocument', [DepartementController::class, 'index'])->name('filtre.document');
Route::post('/extractzipp', [ZippController::class,'exportDossier'])->name('extract.zip');
Route::get('/rapport/controllers', [RapportController::class, 'listerapports'])->name('rappport.liste');
