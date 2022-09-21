<?php

/* -------------------------------------------------------------------------- */
/*                                 TerminatedContract Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(TerminatedContractController::class)->middleware('auth')->group(function(){
    Route::get('TerminatedContract/search', 'search')->name('Operator.TerminatedContract.search');

});
