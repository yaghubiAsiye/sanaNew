<?php

/* -------------------------------------------------------------------------- */
/*                                 Payslip Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(PayslipController::class)->group(function(){
    Route::get('Payslip', 'index')->name('Payslip');
    Route::get('Payslip/create', 'create')->name('Payslip.create');
});
