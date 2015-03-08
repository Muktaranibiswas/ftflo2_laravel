<?php

Route::get('/', 'WelcomeController@index');
Route::get('/dolon', 'WelcomeController@dolon');
Route::get('home', 'HomeController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::model('candidates', 'Candidate');
Route::model('castings', 'Casting');
Route::model('voterentrys', 'Voterentry');


Route::resource('candidates', 'CandidatesController');
Route::resource('castings', 'CastingsController');
Route::resource('voterentrys', 'VoterentryController');