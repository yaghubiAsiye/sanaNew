<?php

use Modules\Payslip\Http\Controllers\Operator\PayslipController;

/* -------------------------------------------------------------------------- */
/*                                 Payslip Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(PayslipController::class)->middleware('auth')->group(function(){
    // Route::get('Payslip', 'index')->name('Payslip.index');
    Route::get('Payslip/create', 'create')->name('Payslip.create');
    Route::post('Payslip/store', 'store')->name('Payslip.store');
});

Route::get('Payslip/create', function() {
    dd(get_class(new PayslipController()));
})->name('Payslip.create');
