<?php
// Order Management
Route::group(['namespace' => 'Profiles'], function () {
    Route::resource('profiles', 'ProfileController');
    //For DataTables
    Route::post('profiles/get', 'ProfileControllerTable')->name('profiles.get');
});
