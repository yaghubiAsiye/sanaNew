<?php

/* -------------------------------------------------------------------------- */
/*                                Request  Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(RequestController::class)->middleware('auth')->group(function(){
    Route::get('requests', 'index')->name('Operator.request.index');
    Route::get('requests', 'responseshow')->name('Operator.request.responseshow');
});
