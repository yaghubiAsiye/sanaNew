<?php

/* -------------------------------------------------------------------------- */
/*                                 RenewedContract Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(RenewedContractController::class)->middleware('auth')->group(function(){
    Route::get('RenewedContract/index', 'index')->name('Operator.RenewedContract.index');

});
