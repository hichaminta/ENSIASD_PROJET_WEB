<?php

use App\Http\Controllers\authentification\Controllerinscription;
use App\Http\Controllers\authentification\ControllerLogin;
use App\Http\Controllers\Espace_etudiant\HomeSPaceetudiantConroller;
use App\Http\Controllers\Home\contactController;
use App\Http\Controllers\Home\homeController;
use App\Http\Controllers\Home\homeevenementController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/EspaceEtudiant', [HomeSPaceetudiantConroller::class, 'Espace_etudiant_Homeindex'])->name('espace_etudiant.index');
    Route::get('/Etudiant_Emploi_de_Temps', [HomeSPaceetudiantConroller::class, 'Etudiant_Emploi_de_Temps_Homeindex'])->name('espace_etudiant.emploi_de_temps');

});
Route::get('/', [homeController::class, 'Homeindex'])->name('home.index');
Route::get('/evenement', [homeevenementController::class, 'Evenementindex'])->name('evenement.index');
Route::get('/evenement/{evenement}', [homeevenementController::class, 'detailsevent'])->name('evenement.detialls');
Route::get('/Login', [ControllerLogin::class, 'LoginIndex'])->name('Login.index');
Route::post('/Login', [ControllerLogin::class, 'Loginconnecter'])->name('Login.connecter');
Route::get('/lougout', [ControllerLogin::class, 'lougout'])->name('lougout.index');
Route::get('/Inscription', [Controllerinscription::class, 'Inscription_Index'])->name('Inscription.index');
Route::get('/contact', [contactController::class, 'Conatactindex'])->name('contact.index');
Route::post('/contactCreate', [contactController::class, 'inserercontact'])->name('contact.create');
