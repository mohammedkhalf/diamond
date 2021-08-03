<?php
// Call  Management
Route::group(['namespace' => 'Calls'], function () {
    Route::resource('calls', 'CallController');
    // //For DataTables
    Route::post('calls/get', 'CallControllerTable')->name('calls.get');
});
