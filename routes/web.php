<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DmrdvController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RdvController;
use Illuminate\Support\Facades\Auth;
Route::resource('formulaire',DmrdvController::class);
Route::resource('patient',PatientController::class);
Route::resource('dmrdv',DmrdvController::class);

/*
|--------------------------------------------------------------------------s
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/formulaire', function () {
    return view('formulaire');
});
Route::get('/covid19', function () {
    return view('covid19');
});
Route::get('/listeanalyse', function () {
    return view('listeanalyse');
});
Route::get('/mavisite', function () {
    return view('mavisite');
});


Auth::routes();
//Route RDV
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/formulaire','App\Http\Controllers\DmrdvController@req')->name('Dmrdv.req');
Route::get('/formulaire','App\Http\Controllers\DmrdvController@formuser')->name('Dmrdv1.req');
Route::post('/formulaire', [App\Http\Controllers\DmrdvController::class, 'store1'])->name('dmrdv.store1');

//Route ESPACE ADMIN
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/per/home', [App\Http\Controllers\HomeController::class, 'perHome'])->name('per.home')->middleware('is_admin');

Route::get('listeP',[PatientController::class,'listeP'])->name('patient.listeP');
Route::get('create',[PatientController::class,'create'])->name('patient.create');


Route::get('dom',[DmrdvController::class,'dom'])->name('dmrdv.dom');
Route::get('create1',[DmrdvController::class,'create1'])->name('dmrdv.create1');
Route::get('labo',[DmrdvController::class,'labo'])->name('dmrdv.labo');
Route::get('create1',[DmrdvController::class,'create1'])->name('dmrdv.create1');
Route::delete('destroy',[DmrdvController::class,'destroy1'])->name('dmrdv.destroy1');
Route::get('dom2',[DmrdvController::class,'dom2'])->name('dmrdv.dom2');
//Route::get('file/resultat',[DmrdvController::class,'resultat'])->name('patient.resultat');


Route::get('file/upload/{id}',[DmrdvController::class,'createf'])->name('file.createf');  // Formulaire D'ajout
Route::post('file/upload/{id}',[DmrdvController::class,'storef'])->name('file.storef'); // Enregister le fichier
Route::get('admin/file/analyse',[DmrdvController::class,'analyse'])->name('file.analyse');

Route::get('file/download/{file}',[DmrdvController::class,'download'])->name('file.download');
//Route::get('file/viewfile/{file}',[DmrdvController::class,'viewfile'])->name('file.viewfile');
Route::get('file/resultat',[DmrdvController::class,'resultat'])->name('file.resultat');

Route::get('contact',[ContactController::class,'create'])->name('contact');
Route::post('contact',[ContactController::class,'store'])->name('contact.l');
Route::get('contactez',[ContactController::class,'contactez'])->name('contactez');
Route::get('pay',[PatientController::class,'pay'])->name('payement');

