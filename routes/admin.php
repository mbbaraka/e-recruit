<!-- Human resource routes -->

<?php

Route::group(['prefix' => '/admin', 'middleware' => 'can:isAdmin, 1', 'namespace' => 'Admin'], function (){
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/jobs', 'JobController@index')->name('admin.jobs.index');
    Route::get('/jobs/new', 'JobController@new')->name('admin.jobs.new');
    Route::post('/jobs/store', 'JobController@store')->name('admin.jobs.store');
    Route::get('/jobs/edit/{id}', 'JobController@edit')->name('admin.jobs.edit');
    Route::post('/jobs/update/{id}', 'JobController@update')->name('admin.jobs.update');
    Route::get('/jobs/delete/{id}', 'JobController@destroy')->name('admin.jobs.delete');
    Route::get('/categories', 'CategoryController@index')->name('admin.categories.index');
    Route::post('/categories/store', 'CategoryController@store')->name('admin.categories.store');
    Route::get('/categories/{id}/delete', 'CategoryController@destroy')->name('admin.categories.delete');
    Route::get('/applications', 'ApplicationController@index')->name('admin.applications.index');
    Route::get('/applications/{id}/view', 'ApplicationController@view')->name('admin.applications.view');
    Route::get('/applications/{application}/resume/{user}', 'ApplicationController@resume')->name('admin.applications.resume');
    // Route::get('/staffs', 'PageController@staffs')->name('hr.staffs');
    // Route::get('/appraisers', 'PageController@appraisers')->name('hr.appraisers');
    // Route::get('/appraisals', 'PageController@appraisals')->name('hr.appraisals');
    // Route::get('/', 'HomeController@index')->name('hr.index');
});
