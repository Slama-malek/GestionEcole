<?php

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

Route::get('/home', 'HomeController@index')->name('home');
//------------ Route pour Admin-------------
Route::group(['middelware' => ['admin'] , 'prefix' => 'admin'], function (){
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get ( '/users', 'UserController@index' );
    Route::post('/delete', 'UserController@destroy');
    
  //-------Gallery----
  Route::get('/gallery', 'GalleriesController@index');
Route::get('/gallery/create', 'GalleriesController@create');
Route::post('/gallery', 'GalleriesController@store');
Route::get('/gallery/{gallery}', 'GalleriesController@show');
Route::get('/gallery/{gallery}/edit', 'GalleriesController@edit');
Route::put('/gallery/{gallery}', 'GalleriesController@update');
Route::delete('/gallery/{gallery}', 'GalleriesController@destroy');
    //----------photo----------
    Route::get('/photo/create', 'PhotosController@create');
Route::post('/photo', 'PhotosController@store');
Route::get('/photo/{photo}', 'PhotosController@show');
Route::get('/photo/{photo}/edit', 'PhotosController@edit');
Route::put('/photo/{photo}', 'PhotosController@update');
Route::delete('/photo/{photo}', 'PhotosController@destroy');

});

Route::get('/ads', 'SlidersController@index');
//----------------sliders------------
Route::post('/store', 'SlidersController@store')->name('Sliders.store');
//Route::post('/destroySld','SlidersController@destroySld')->middleware('admin')->name('Sliders.delete');
Route::delete('ads/{id}','SlidersController@destroySld')->middleware('admin')->name('Sliders.destroy');


/*--------------- Route Event
Route::group(['namespace'=>'Latfur\Event\Http\Controllers'],function(){
    Route::get('event','EventController@index')->name('event');  
    Route::get('event-list','EventController@event_list');  
    Route::post('event','EventController@save_event');  
    Route::get('all-event','EventController@all_event')->name('all-event');
    Route::get('single-event/{id}','EventController@single_event');
    Route::post('update-event','EventController@update_event');
    Route::delete('delete-event/{id}','EventController@delete_event');
  });
  */

  //-------Galery----