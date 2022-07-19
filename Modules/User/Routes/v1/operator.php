<?php

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
