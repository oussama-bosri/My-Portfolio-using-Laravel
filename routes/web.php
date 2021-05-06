<?php
  
Route::view('/', 'welcome');
  
// contact by email

Route::post('contact', 'ContactController@sendEmail')->name('sendEmail');

 