<?php

use Modules\User\Http\Controllers\Operator\PayslipEmployeeController;

/* -------------------------------------------------------------------------- */
/*                                 User Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(UserController::class)->middleware('auth')->group(function(){
    Route::get('User/index', 'index')->name('Operator.User.index');
    Route::get('User/create', 'create')->name('Operator.User.create');
    Route::post('User/store', 'store')->name('Operator.User.store');
    Route::get('User/edit/{user}', 'edit')->name('Operator.User.edit');
    Route::put('User/update/{user}', 'update')->name('Operator.User.update');


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

