<?php
    Route::get('/', 'companyController@index')->name('company.index');
    Route::get('/create', 'companyController@create')->name('company.create');
    Route::post('/save', 'companyController@save')->name('company.save');
    Route::get('/{id}/edit', 'companyController@edit')->name('company.edit');
    Route::put('/{id}/update', 'companyController@update')->name('company.update');
    Route::delete('/{id}/remove', 'companyController@destroy')->name('company.remove');
//    Route::resource( '/', 'companyController' );
