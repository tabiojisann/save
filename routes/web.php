<?php

Auth::routes();
Route::prefix('login')->name('login.')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});
Route::prefix('register')->name('register.')->group(function () {
    Route::get('/{provider}', 'Auth\RegisterController@showProviderUserRegistrationForm')->name('{provider}');
    Route::post('/{provider}', 'Auth\RegisterController@registerProviderUser')->name('{provider}');
});

// Route::get('/', 'ArticleController@index')->name('articles.index');

Route::get('/', function() {
    return view('layout');
});

// Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth');
// Route::resource('/articles', 'ArticleController')->only(['show']);
// Route::prefix('articles')->name('articles.')->group(function () {
//     Route::put('/{article}/like', 'ArticleController@like')->name('like')->middleware('auth');
//     Route::delete('/{article}/like', 'ArticleController@unlike')->name('unlike')->middleware('auth');
// });



