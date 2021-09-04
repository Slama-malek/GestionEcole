<?php
use App\User;
use App\Notifications\InscriEleve;

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

Route::get('/', 'HomeUserController@index');

/*
Route::get('/slider', function () {
    return view('admin.sliders');
});*/


Auth::routes();
// Route::get('/login/parents', 'Auth\LoginController@showWriterLoginForm');
// Route::get('/register/parents', 'Auth\RegisterController@showWriterRegisterForm');
// Route::post('/login/parents', 'Auth\LoginController@writerLogin');
// Route::post('/register/parents', 'Auth\RegisterController@createWriter');
// Route::view('/parents', 'parents');

Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middelware' => ['parents'] , 'prefix' => 'parents'], function (){
//   Route::get('/','user\ParentsController@index');
// });

//------------ Route pour Admin-------------



Route::group(['middelware' => ['admin'] , 'prefix' => 'admin'], function (){
    Route::get('/','DashboardController@index');
    Route::get('/nav','DashboardController@navbar');
    
    Route::get ( '/users', 'UserController@index' );
    Route::post('/delete', 'UserController@destroy');
    
  //-------Gallery----
  Route::get('/gallery', 'GalleriesController@index');
Route::get('/gallery/create', 'GalleriesController@create');
Route::post('/gallery', 'GalleriesController@store')->name('gallerie.store');
//Route::post('/gallery', 'GalleriesController@search')->name('gallerie.search');
Route::get('/gallery/{gallery}', 'GalleriesController@show')->name('gallery.show');
Route::get('/gallery/{gallery}/edit', 'GalleriesController@edit');
Route::put('/gallery/{gallery}', 'GalleriesController@update');
Route::delete('/gallery/{gallery}', 'GalleriesController@destroy')->name('gallerie.destroy');
    //----------photo----------
    Route::get('/photo/create', 'PhotosController@create');
Route::post('/photo', 'PhotosController@store');
Route::get('/photo/{photo}', 'PhotosController@show');
Route::get('/photo/{photo}/edit', 'PhotosController@edit');
Route::put('/photo/{photo}', 'PhotosController@update');
Route::delete('/photo/{photo}', 'PhotosController@destroy');
//--------------------classes
Route::get('/classes', 'ClassesController@index');
Route::get('/classe/create', 'ClassesController@create');
Route::post('/classes', 'ClassesController@store');
Route::put('/classe/{classe}', 'ClassesController@update')->name('classe.update');
Route::get('/class/{classe}', 'ClassesController@show');
Route::delete('/classe/{classe}', 'ClassesController@destroy')->name('classe.delete');
Route::delete('/cla/{id}', 'ClassesController@destroym')->name('classe.destroym');
Route::delete('/clas/{id}', 'ClassesController@destroygrp')->name('classe.destroygrp');
Route::get('/classe-matiere/{id}', 'ClassesController@editm')->name('matiere.modifier');
Route::put('/classe-matiere/{id}', 'ClassesController@updatem')->name('matiere.updatem');
//-------email----
Route::get('/email', 'EmailController@index');

//---------eleves----
Route::get('/eleves', 'ElevesController@index');
Route::get('/eleve/{id}', 'ElevesController@show')->name('eleve.show');

//-------Reclams-----
Route::get('/reclams', 'ReclamsController@index');


Route::get('/ads', 'SlidersController@index');
//----------------sliders------------
Route::post('/store', 'SlidersController@store')->name('Sliders.store');
Route::post('/destroySld','SlidersController@destroySld')->middleware('admin')->name('Sliders.delete');
Route::delete('ads/{id}','SlidersController@destroySld')->middleware('admin')->name('Sliders.destroy');


Route::resource('/club', 'ClubController');
Route::resource('/sortie', 'SortiesController');
Route::resource('/evenement', 'EventController');
//liste des enseignants à verifier 
Route::get('/enseignantsAverifier' , 'UserController@enseignantsaverifier');
//liste des enseignants déja vérifier 
Route::get('/enseignantsVerifier' , 'UserController@enseignantsVerifier');
//verification d'un enseignant
Route::post('/verifEnseg/{id}' , 'UserController@verifier')->name('enseg.verif');
//afficher un enseignant
Route::get('/enseignant/{id}' , 'EnseignantController@show');
//ajouter un classe au enseignant
Route::get('/ens/{ens}' , 'EnseignantController@ajout');
Route::post('/ens/{ens}' , 'EnseignantController@addClassEns')->name('ajout.classEns');
//gestion du groupe
Route::resource('/groupe' , 'GroupeController');
//ajouter groupe a un classe 
Route::post('/ajoutGrp/{id}' , 'ClassesController@ajoutGroupeClass')->name('ajout.group');
//ajouter un groupe au classe d'eleve 
Route::post('/ajoutGrpElve/{eleve}/{classe}' , 'ElevesController@addGroupeEleve')->name('ajout.groupEleve');
Route::get('/ajoutGrpElve/{eleve}/{classe}' , 'ElevesController@ajout');

//Route pour Matieres
Route::get('matieres', 'MatieresController@index');
Route::get('matiere/create', 'MatieresController@create');
Route::post('matiere/create', 'MatieresController@store')->name('matiere.store');
Route::delete('/matiere/{matiere}', 'MatieresController@destroy')->name('matiere.destroy');
Route::get('/matiere/{mat}', 'MatieresController@edit')->name('matiere.edit');
Route::put('/matiere/{mat}', 'MatieresController@update')->name('matiere.update');
//ajouter une matiere au enseignant 
Route::get('/matiere/ens/{ens}', 'MatieresController@ajout');
Route::post('/matiere/ens/{ens}', 'MatieresController@ajoutMatiere')->name('ajout.matiere');
//route pour  coef 
//Route::resource('coef', 'CoefController');
Route::get('coef', 'CoefController@index');
Route::get('Coef/create', 'CoefController@create');
Route::post('Coef/create', 'CoefController@store')->name('Coef.store');
Route::get('/coef/{id}', 'CoefController@edit')->name('coef.edit');
Route::put('/coef/{id}', 'CoefController@update')->name('coef.update');
Route::delete('/coef/{id}', 'CoefController@destroy')->name('coef.delete');
Route::get('/classe/matiere/{id}' , 'ClassesController@ajout');
Route::post('/classe/matiere/{id}' , 'ClassesController@ajoutMatiereClass')->name('ajout.matiere');
Route::get('/classe/{id}', 'ClassesController@edit')->name('classe.edit');
Route::put('/classe/{id}', 'ClassesController@update')->name('classe.update');
/**route verification du parent  */

Route::get('/parentAverifier' , 'UserController@ParentAverifier');
Route::get('/parentverifier' , 'UserController@Parentverifier');
//liste des enseignants déja vérifier 
//Route::get('/enseignantsVerifier' , 'UserController@enseignantsVerifier');
//verification d'un enseignant
Route::post('/verifparent/{id}' , 'UserController@verifierParent')->name('parent.verif');




Route::get('getGroupes/{id}' , 'EnseignantController@getGroupe')->name('getGroupes'); 


});

  /**********End Route Admin */

//*****************Enseignantss */
Route::group([ 'prefix' => 'ens'], function (){
  /**liste des eleves  */
Route::get('/eleves/{classe}/{groupe}/{mat}' , 'Ens\EnseignantController@eleves');
/** add presence to eleve  */
Route::post('/eleves/{classe}/{groupe}/{mat}' , 'Ens\EnseignantController@presence')->name('presence');
Route::get('/presences/{classe}/{groupe}/{mat}' , 'Ens\EnseignantController@listePresence');
/** Route cours  */
Route::resource('cours', 'Ens\CoursController');

/** route notes */
Route::get('notes/{classe}/{groupe}/{mat}', 'Ens\EnseignantController@notes') ;
Route::post('notes/{classe}/{groupe}/{mat}', 'Ens\EnseignantController@addNotes')->name('note') ;
  
Route::get('allnotes/{classe}/{groupe}/{mat}', 'Ens\EnseignantController@allnotes');

Route::get('tousnotes', 'Ens\EnseignantController@tousnote');
Route::post('tousnotes','Ens\EnseignantController@recherche')->name('recherche.notes');

});
/**End Route Enseignant */

/***********************************Route Parent */
Route::group([ 'prefix' => 'parent'], function (){
  Route::get('eleve/{id}', 'Parent\ParentsController@eleve');
  Route::get('cours/{id}', 'Parent\ParentsController@cours');
  Route::get('note/{id}', 'Parent\ParentsController@notes');
});


/**End Route Parents */

  //-------User----

  //-----------------------Event----
  Route::get('events','user\EventController@index');
  Route::get('clubs','user\EventController@indexclubs');
  Route::get('sorties','user\EventController@indexsorties');
  Route::get('club/{id}','user\EventController@indexClubDetail');
  //--------------inscription ----
  Route::get('inscription','user\ElevesController@index');
  
  Route::post('/inscription','user\ElevesController@store')->name('inscription.store');
 

  

  

  //----------------galleries------------
  Route::get('Programme-prepartoire','user\ProgrammePrepaController@index');
  Route::get('Programme-primaire','user\ProgrammePrepaController@indexprimaire');
  Route::get('Procedures','user\ProgrammePrepaController@indexprocedures');
  Route::get('reglement','user\ProgrammePrepaController@indexreglement');
  Route::get('gallerie/photos','user\galleriesController@index');
  Route::get('gallerie/vidéos','user\galleriesController@indexvideos');
 //----Contact
 Route::get('contact','user\ReclamsController@index');
 Route::post('contact','user\ReclamsController@store')->name('reclams.store');
 // Route qui permet de connaître la langue active
Route::get('locale', 'LocalizationController@getLang')->name('getlang');

// Route qui permet de modifier la langue
Route::get('locale/{lang}', 'LocalizationController@setLang')->name('setlang');

Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm');
Route::get('/logout', function(){
    
  Auth::logout();
  return Redirect::to('login-admin');
});
Route::get('/logoutuser', function(){
  
  Auth::logout();
  return Redirect::to('login-user');
});
//auth
Route::get( 'registerUser', 'RegisterController@showRegisterFormAdmin' );
Route::post( '/registerUser', 'RegisterController@registerUser' )->name('registerUser');
Route::post( '/register-admin', 'RegisterController@register' )->name('register-admin');
Route::get( 'register-admin', 'RegisterController@showRegisterFormAdmin' );
Route::get( 'login-admin', 'AuthController@showLoginFormAdmin' )->name('login-admin');
Route::post( '/authenticate', 'AuthController@authenticate' )->name('authenticate');

Route::get( 'login-parent', 'AuthController@showLoginFormUser' )->name('login-user');
Route::get('/dashboard-parents','Parent\ParentsController@index');

Route::get( 'registerEnseignant', 'RegisterController@showRegisterFormAdmin' );
Route::post( '/registerEnseignant', 'RegisterController@registerEnseignant' )->name('registerEnseignant');
Route::get( 'login-enseignant', 'AuthController@showLoginFormEnseignant' )->name('login-user');
Route::get( 'dashboard-enseignant', 'Ens\EnseignantController@index');

  ////-----notification
  Route::get('maskAsRead', function (){
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
  })->name('MarkLue');
  