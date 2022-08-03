<?php

use Modules\Payslip\Http\Controllers\Employee\PayslipController;

/* -------------------------------------------------------------------------- */
/*                                 Payslip Employee route                       */
/* -------------------------------------------------------------------------- */
Route::controller(PayslipController::class)->middleware('auth')->group(function(){
    Route::get('payslips', 'payslips')->name('Employee.payslips');
    Route::get('payslip/{date}', 'payslipSingle')->name('Employee.payslipSingle');

    Route::get('downloadPDF/{date}', 'downloadPDF');



});

// Route::get('/downloadPDF/{value}',[PayslipController::class, 'downloadPDF']);

