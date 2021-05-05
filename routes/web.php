<?php
  
Route::view('/', 'welcome');
  
// contact by email

Route::post('contact', 'ContactlController@sendEmail');

 