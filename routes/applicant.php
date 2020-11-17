<!-- Human resource routes -->
<?php

Route::group(['prefix' => '/home', 'middleware' => 'auth', 'namespace' => 'Applicant'], function (){
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
});
