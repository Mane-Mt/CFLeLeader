<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\payementController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\UserManagerController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\FormateurController;
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
})->name('accueil');

Route::get('/admin', function () {
  // return redirect('/dashboard');
return view('admin/pages/index');
});


Route::get('logout',[UserManagerController::class,'logout']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  return view('admin/pages/index');
})->name('dashboard');

Route::get('/formation', function () {
   return view('pages/formation');
});
Route::get('/inscription', function () {
    return view('pages/inscription');
 });



 Route::get('/historique', function () {
   return view('pages/historique');
});

 Route::get('/payement', function () {
    return view('pages/payement');
 });


// Route::get('/payementStatus', function () {
//    return view('pages/payementStatus');
// });

Route::get('/error', function () {
   return view('pages/error');
});

//Routes vers les fichiers admin de payement
Route::post('/saveInscription',[InscriptionController::class,'saveInscription']);
Route::post('/savePayement',[payementController::class,'savePayement']);
Route::post('/createPayement',[payementController::class,'createPayement']);
Route::get('/verifyPayement/', [payementController::class,'verifyPayement']);
Route::get('/admin/ListeDesPayements',[payementController::class,'showPayement']);
Route::get('/admin/ListeDesTransations',[payementController::class,'showTransactions']);
Route::get('/payementStatus/{code}',[payementController::class,'payementStatus']);
Route::get('/payementSuccess',[payementController::class,'show']);
Route::get('/paye',[payementController::class,'generateRecu']);
Route::post('/validatePayement', [payementController::class,'validatePayement']);
//cette route fais réference à une fonction de génération de pdf
//Route::get('/pdf/{inscription}', ['as' => 'inscription.pdf', 'uses' => 'InscriptionController@orderPdf']);

//ces routes permettent de générer la liste des personnes inscrites par formation
Route::get('/admin/listInscription/{id}', [InscriptionController::class,'getInscriptionsByFormation']);
Route::get('/admin/listInscription/pdf/{id}', [InscriptionController::class,'InscriptionByFormationPDF']);

//liste total de tout les inscrite
Route::get('/admin/listeDesInscrits',[InscriptionController::class,'getAllInscriptions']);

//Créer et telecharger le pdf du réçu
Route::get('/recuPayement', [payementController::class,'generateRecu']);
Route::get('/recuPayement/pdf', [payementController::class,'downloadRecu']);



############################################################
#                       Admin                               #
############################################################
Route::get('/admin/addUser', [UserManagerController::class, 'getAddUser'])->name('adduser');
Route::post('/admin/saveUser', [UserManagerController::class, 'postAddUser'])->name('saveuser');
Route::get('/admin/listUser', [UserManagerController::class, 'showUser'])->name('listuser');

Route::get('/admin/listUserByFormation', function(){
   return view('admin/pages/personByFormation');
});

// le role d'edition d'un user
Route::get('/roleEdit/{id}', [UserManagerController::class, 'edituser'])->name('edituser');
Route::put('/roleUpdate/{id}', [UserManagerController::class, 'updateuser'])->name('updateuser');
Route::delete('/roleDelete/{id}', [UserManagerController::class, 'deleteuser'])->name('deleteuser');


//les routes vers les pages admins
// Route::get('/admin', function () {
//    return view('admin/pages/index');
// });

// Les routes de la fonctinnalité ajout d'une formation
Route::get('/admin/addFormation', function () {
   return view('admin/pages/addFormation');
});

Route::get('/formationData/{id}', [FormationController::class, 'getFormation']);
Route::post('/admin/storeFormation',[FormationController::class,'store']);
Route::get('/recuPayement/pdf', [payementController::class,'downloadRecu']);
Route::get('/admin/showFormations', [FormationController::class, 'show']);
Route::get('/admin/deleteFormation/{id}', [FormationController::class, 'delete']);
Route::get('/admin/editFormation/{id}', [FormationController::class, 'edit']);
Route::put('/admin/updateFormation/{id}', [FormationController::class, 'update']);

//Actualités
Route::get('/admin/publierActualite', [ActualiteController::class, 'create']);
Route::post('/admin/storeActualite',[ActualiteController::class,'store']);
Route::get('/admin/ListeDesActualites',[ActualiteController::class,'index']);
Route::get('/admin/editActualite/{id}',[ActualiteController::class,'edit']);
Route::get('/admin/publishActualite/{id}', [ActualiteController::class,'publish']);
Route::put('/admin/updateActualite/{id}', [ActualiteController::class,'update']);
Route::get('/admin/deleteActualite/{id}', [ActualiteController::class, 'destroy']);
Route::get('/actualite/{id}', [ActualiteController::class, 'show']);


//Formateur

Route::get('/admin/addFormateur', [FormateurController::class, 'create']);
Route::post('/admin/storeFormateur',[FormateurController::class,'store']);
Route::get('/admin/ListeDesFormateurs',[FormateurController::class,'index']);
Route::get('/admin/editFormateur/{id}',[FormateurController::class,'edit']);
Route::put('/admin/updateFormateur/{id}', [FormateurController::class,'update']);
Route::get('/admin/deleteFormateur/{id}', [FormateurController::class, 'destroy']);
Route::get('/Formateur/{id}', [FormateurController::class, 'show']);
//
Route::get('/admin/contact', [contactController::class, 'index'])->name('contact');
Route::post('/savecontact', [contactController::class, 'savecontact']);

Route::get('/admin/suggestions',[contactController::class,'show']);
Route::get('/admin/seenSuggestions/{id}',[contactController::class,'seen']);
Route::get('/admin/deleteSuggestions/{id}',[contactController::class,'destroy']);
Route::get('/email', function(){
    return new ContactMessageCreate("abel","koledzi@gmail.com","ajakjfdqksjvj dfjv kfdsjcn jkvkcx kdcjkj fkcjjvd");
});
