<?php


/* -------------------------------------------------------------------------- */
/*                                 request Employee route                       */
/* -------------------------------------------------------------------------- */
Route::controller(RequestController::class)->middleware('auth')->group(function(){
    Route::get('request/create', 'create')->name('Employee.request.create');
    Route::get('requests', 'index')->name('Employee.request.index');
    Route::post('request/store', 'store')->name('Employee.request.store');
    Route::get('requests/show/{requestType}', 'show')->name('Employee.request.show');
    Route::post('requests/reply', 'reply')->name('Employee.request.reply');
    Route::get('requests/closeRequest/{requestType}', 'closeRequest')->name('Employee.request.closeRequest');



});
