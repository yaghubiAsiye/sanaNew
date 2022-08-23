<?php

/* -------------------------------------------------------------------------- */
/*                                 Recruitment Operator route                 */
/* -------------------------------------------------------------------------- */
Route::controller(RecruitmentController::class)->middleware('auth')->group(function(){
    Route::get('Recruitment', 'index')->name('Operator.Recruitment.index');
    Route::get('Recruitment/create', 'create')->name('Operator.Recruitment.create');
    Route::post('Recruitment/store', 'store')->name('Operator.Recruitment.store');
    Route::post('Recruitment/changeResult/{recruitment}', 'changeResult')->name('Operator.Recruitment.changeResult');
    Route::get('Recruitment/changeStatus/{recruitment}', 'changeStatusShow')->name('Operator.Recruitment.changeStatus.show');
    Route::post('Recruitment/changeStatus/{recruitment}', 'changeStatusUpdate')->name('Operator.Recruitment.changeStatus.update');
});
