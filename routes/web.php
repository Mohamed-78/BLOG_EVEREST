<?php
use Illuminate\Support\Facades\Auth;


//--------------------------BLOG-----------------------------------
Route::get('/', 'websiteController@index')->name('accueil');
Route::get('/detail_annonce/{id}', 'websiteController@detail_annonce')->name('detail_annonce');
Route::get('/inscription/{id}', 'websiteController@inscription')->name('inscription');
Route::post('/saveUser/{id}', 'websiteController@saveUser')->name('saveUser');

Route::post('/publier_commentaire/{id}', 'CommentaireConttroller@commentaire')->name('commenter');

Auth::routes();

Route::get('/managment/dashboard/index', 'HomeController@index')->name('home');
Route::get('/managment/ajouter/post', 'HomeController@addPost')->name('addPost');
Route::post('/managment/save/post', 'HomeController@savePost')->name('savePost');
Route::get('/managment/voir/post/{id}', 'HomeController@singlePost')->name('singlePost');
Route::post('/managment/update/post/{id}', 'HomeController@updatePost')->name('updatePost');
Route::get('/managment/delete/post/{id}', 'HomeController@deletePost')->name('deletePost');
