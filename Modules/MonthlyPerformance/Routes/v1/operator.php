<?php

use Modules\MonthlyPerformance\Http\Controllers\Operator\MonthlyPerformanceController;


/* -------------------------------------------------------------------------- */
/*                                 MonthlyPerformance Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(MonthlyPerformanceController::class)->middleware('auth')->group(function(){
    Route::get('Performance/index', 'index')->name('Operator.Performance.index');
    Route::get('Performance/create', 'create')->name('Operator.Performance.create');
    Route::post('Performance/store', 'store')->name('Operator.Performance.store');
    // Route::get('Performance/edit/{Performance}', 'edit')->name('Operator.Performance.edit');
    // Route::put('Performance/update/{Performance}', 'update')->name('Operator.Performance.update');
});



