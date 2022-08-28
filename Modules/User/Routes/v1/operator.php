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

Route::controller(PermissionController::class)->middleware('auth')->group(function(){
    Route::get('Permission/index', 'index')->name('Operator.Permission.index');
    Route::get('Permission/create', 'create')->name('Operator.Permission.create');
    Route::post('Permission/store', 'store')->name('Operator.Permission.store');
    Route::get('Permission/edit/{permission}', 'edit')->name('Operator.Permission.edit');
    Route::put('Permission/update/{permission}', 'update')->name('Operator.Permission.update');
    Route::delete('Permission/destroy/{permission}', 'destroy')->name('Operator.Permission.destroy');
});

Route::controller(RoleController::class)->middleware('auth')->group(function(){
    Route::get('Role/index', 'index')->name('Operator.Role.index');
    Route::get('Role/create', 'create')->name('Operator.Role.create');
    Route::post('Role/store', 'store')->name('Operator.Role.store');
    Route::get('Role/edit/{role}', 'edit')->name('Operator.Role.edit');
    Route::put('Role/update/{role}', 'update')->name('Operator.Role.update');
    Route::delete('Role/destroy/{role}', 'destroy')->name('Operator.Role.destroy');
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

