<?php
Route::get('/', "TaskController@index");
Route::post("/task", "TaskController@store");
Route::get("/{id}/complete", "TaskController@complete");
Route::get("/{id}/incomplete", "TaskController@incomplete");
Route::get("/{id}/delete", "TaskController@destroy");