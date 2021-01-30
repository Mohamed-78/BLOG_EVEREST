<?php
use Illuminate\Support\Facades\Auth;


//--------------------------BLOG-----------------------------------
Route::get('/', 'websiteController@index')->name('accueil');
Route::get('/detail_annonce/{id}', 'websiteController@detail_annonce')->name('detail_annonce');

Route::POST('/publier_commentaire{id}', 'CommentaireController@commentaire')->name('Comment');

Auth::routes();

Route::get('/connexion/user', 'ConnexionController@authenticate');



Route::get('/managment/dashboard/index', 'HomeController@index')->name('home');
