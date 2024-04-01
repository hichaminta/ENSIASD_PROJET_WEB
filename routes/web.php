<?php

use App\Http\Controllers\admincntrl\admincntrpage;
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
Route::get('/admin', [admincntrpage::class, 'indexcntrlpage'])->name('admin.index');
Route::get('/admin/evenement', [admincntrpage::class, 'affcher_evenement'])->name('admin.evnement.index');
Route::delete('/admin/evenement/{id}', [admincntrpage::class, 'suprimer_evenement'])->name('admin.evenement.delete');
Route::put('/admin/evenement/{id}', [admincntrpage::class, 'modifier_evenement'])->name('admin.evenement.update');
Route::post('/admin/evenement', [admincntrpage::class, 'ajouter_evenement'])->name('admin.evenement.add');

Route::delete('/admin/actualite/{id}', [admincntrpage::class, 'suprimer_actualite'])->name('admin.actualite.delete');
Route::put('/admin/actualite/{id}', [admincntrpage::class, 'modifier_actualite'])->name('admin.actualite.update');
Route::get('/admin/actualites', [admincntrpage::class, 'affcher_actualite'])->name('admin.actualite.index');

Route::post('/admin/actualite', [admincntrpage::class, 'ajouter_actualite'])->name('admin.actualite.add');

Route::get('/', [homeController::class, 'Homeindex'])->name('home.index');
Route::get('/evenement', [homeevenementController::class, 'Evenementindex'])->name('evenement.index');
Route::get('/evenement/{evenement}', [homeevenementController::class, 'detailsevent'])->name('evenement.detialls');
Route::get('/Login', [ControllerLogin::class, 'LoginIndex'])->name('Login.index');
Route::post('/Login', [ControllerLogin::class, 'Loginconnecter'])->name('Login.connecter');
Route::get('/lougout', [ControllerLogin::class, 'lougout'])->name('lougout.index');
Route::get('/Inscription', [Controllerinscription::class, 'Inscription_Index'])->name('Inscription.index');
Route::post('/Inscription', [Controllerinscription::class, 'Inscription_creation'])->name('Inscription.creation');
Route::get('/contact', [contactController::class, 'Conatactindex'])->name('contact.index');
Route::post('/contactCreate', [contactController::class, 'inserercontact'])->name('contact.create');
Route::get('/verifermail/{user}/{token}', [ControllerLogin::class, 'verifyEmail'])->name('verfiedmail.index');
// partie admin
