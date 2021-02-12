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
// require_once ('applicant.php');

// Human resource routes

require_once ('admin.php');


// Home routes

Route::group(['prefix' => '/', 'namespace' => 'Home'], function () {
    // Route::get('/', 'HomeController@index')->name('index');
    Route::get('/job/{id}', 'HomeController@singleJob')->name('job.single');
    Route::get('/job/{id}/apply', 'ApplicationController@index')->name('apply.index');
    Route::post('/job/apply/store', 'ApplicationController@store')->name('apply.store');
    Route::get('/job/apply/success', 'ApplicationController@applySuccess')->name('apply.success');
    Route::post('/subscribe', 'HomeController@subscribe')->name('subscription');
//     Route::get('/search', 'HomeController@searchJob')->name('search');
});

Route::group(['prefix' => '/', 'middleware' => 'auth', 'namespace' => 'Applicant'], function (){
    Route::get('/', 'HomeController@index')->name('applicant.index');
    Route::get('/resume', 'ResumeController@index')->name('applicant.resume.index');
    Route::post('/resume/store', 'ResumeController@store')->name('applicant.resume.store');
    Route::get('/resume/id={id}/view-resume', 'ResumeController@view')->name('applicant.resume.view');
    Route::get('/resume/id={id}/delete', 'ResumeController@destroy')->name('applicant.resume.delete');
    Route::get('/profile', 'ParticularsController@index')->name('applicant.profile.index');
    Route::post('/profile/{id}/update', 'ParticularsController@update')->name('applicant.profile.update');
    // Route::get('/staffs', 'PageController@staffs')->name('hr.staffs');
    // Route::get('/appraisers', 'PageController@appraisers')->name('hr.appraisers');
    // Route::get('/appraisals', 'PageController@appraisals')->name('hr.appraisals');
    // Route::get('/', 'HomeController@index')->name('hr.index');

    // Education Level Attained
    Route::post('/resume/education/{id}/store', 'ResumeController@storeEducation')->name('applicant.education.store');


    // Work experience
    Route::post('/resume/experience/{id}/store', 'ResumeController@storeExperience')->name('applicant.experience.store');


    // professional SKills
    Route::post('/resume/skills/{id}/store', 'ResumeController@storeSkill')->name('applicant.skill.store');


    // Jobs applied for
    Route::get('/jobs/applied', 'JobController@index')->name('applicant.jobs.applied');
    Route::get('/jobs', 'JobController@index')->name('applicant.jobs.index');



});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
