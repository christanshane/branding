<?php
Route::get('/', function (){
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    Route::post('/signup', [
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
    ]);
});
