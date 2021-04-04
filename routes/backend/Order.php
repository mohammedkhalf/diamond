<?php
// Order Management
Route::group(['namespace' => 'Orders'], function () {
    Route::resource('orders', 'OrderController', ['except' => ['show']]);
    //For DataTables
    Route::post('orders/get', 'OrderControllerTable')->name('orders.get');
});
