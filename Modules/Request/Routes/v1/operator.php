<?php

/* -------------------------------------------------------------------------- */
/*                                Request  Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(RequestController::class)->middleware('auth')->group(function(){
    Route::get('requests', 'index')->name('Operator.request.index');
    Route::get('requests/response/{requestType}', 'responseshow')->name('Operator.request.responseshow');
    Route::post('requests/reply', 'reply')->name('Operator.request.reply');

});
