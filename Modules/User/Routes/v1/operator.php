<?php

use Modules\User\Http\Controllers\Operator\PayslipEmployeeController;

/* -------------------------------------------------------------------------- */
/*                                 User Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(UserController::class)->middleware('auth')->group(function(){
    Route::get('User/index', 'index')->name('User.index');
});

Route::controller(ImportUserController::class)->middleware('auth')->group(function(){
    Route::get('ImportUser/create', 'create')->name('ImportUser.create');
    Route::post('ImportUser/store', 'store')->name('ImportUser.store');
});

Route::controller(PayslipEmployeeController::class)->middleware('auth')->group(function(){
    Route::get('PayslipEmployee/index/{codeMeli}', 'index')->name('PayslipEmployee.index');
    // Route::get('PayslipEmployee/{date}/{codeMeli}', 'payslipSingle')->name('PayslipEmployee.payslipSingle');
    Route::get('PayslipEmployee/downloadPDF/{date}/{codeMeli}', 'downloadPDF')->name('PayslipEmployee.downloadPDF');

});

