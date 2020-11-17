<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Auth::routes(['verify' => true]);

// Applicant routes
require_once ('applicant.php');

// Human resource routes

require_once ('admin.php');


// Home routes

Route::group(['prefix' => '/', 'namespace' => 'Home'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/job/{id}', 'HomeController@singleJob')->name('job.single');
    Route::get('/job/{id}/apply', 'ApplicationController@index')->name('apply.index');
    Route::post('/job/apply/store', 'ApplicationController@store')->name('apply.store');
    Route::get('/job/apply/success', 'ApplicationController@applySuccess')->name('apply.success');
    Route::post('/subscribe', 'HomeController@subscribe')->name('subscription');
    Route::get('/search', 'HomeController@searchJob')->name('search');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
