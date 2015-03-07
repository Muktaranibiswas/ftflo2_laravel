<?php

Route::get('/', 'WelcomeController@index');
Route::get('/dolon', 'WelcomeController@dolon');
Route::get('home', 'HomeController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::model('voterentrys', 'Voterentry');

Route::resource('voterentrys', 'VoterentrysController');