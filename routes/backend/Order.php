<?php
// Order Management
Route::group(['namespace' => 'Orders'], function () {
    Route::resource('orders', 'OrderController', ['except' => ['show']]);
    //For DataTables
    Route::post('orders/get', 'OrderControllerTable')->name('orders.get');
    //send whatsapp
    Route::get('orders/send-whatsapp/{order}', 'OrderController@sendWhatsapp')->name('orders.send');
    //send phone inbox
    Route::get('orders/send-phone/{order}', 'OrderController@sendPhoneNumber')->name('orders.send-phone');
});
