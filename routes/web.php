<?php

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('index');

//確認ページ
Route::post('/contact/confirm', 'App\Http\Controllers\ContactController@confirm')->name('confirm');

//送信完了ページ
Route::post('/contact/thanks', 'App\Http\Controllers\ContactController@send')->name('send');
