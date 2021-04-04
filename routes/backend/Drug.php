<?php
// Faq Management
Route::group(['namespace' => 'Drugs'], function () {
    Route::resource('drugs', 'DrugController', ['except' => ['show']]);
    //For DataTables
    Route::post('drugs/get', 'DrugTableController')->name('drugs.get');
});
