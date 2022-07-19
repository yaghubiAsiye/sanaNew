<?php

/* -------------------------------------------------------------------------- */
/*                                 Payslip Employee route                       */
/* -------------------------------------------------------------------------- */
Route::controller(PayslipController::class)->middleware('auth')->group(function(){
    Route::get('payslipShow', 'payslipShow')->name('Employee.payslipShow');
    // Route::post('Payslip/store', 'store')->name('Payslip.store');
});
