<?php

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Route;
Route::post('/addrecored', 'App\Http\Controllers\RecordController@create');
