<?php
use Illuminate\Support\Facades\Auth;


//--------------------------BLOG-----------------------------------
Route::get('/', 'websiteController@index')->name('accueil');
Route::get('/detail_annonce/{id}', 'websiteController@detail_annonce')->name('detail_annonce');

Route::post('/publier_commentaire/{id}', 'websiteController@commentaire')->name('commenter');

Auth::routes();

//--------------------------ADMIN----------------------------------------

Route::get('/managment/dashboard/index', 'HomeController@index')->name('home');
Route::get('/managment/ajouter/post', 'HomeController@addPost')->name('addPost');
Route::post('/managment/save/post', 'HomeController@savePost')->name('savePost');
Route::get('/managment/voir/post/{id}', 'HomeController@singlePost')->name('singlePost');
Route::post('/managment/update/post/{id}', 'HomeController@updatePost')->name('updatePost');
Route::get('/managment/delete/post/{id}', 'HomeController@deletePost')->name('deletePost');
Route::get('/managment/dashboard/commentaire', 'HomeController@listCommentaire')->name('listCommentaire');
Route::get('/managment/voir/commentaire/{id}', 'HomeController@voirCommentaire')->name('voirCommentaire');
Route::get('/managment/delete/commentaire/{id}', 'HomeController@deleteCommentaire')->name('deleteCommentaire');
