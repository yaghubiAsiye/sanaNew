<?php

/* -------------------------------------------------------------------------- */
/*                                 Announcement Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(AnnouncementController::class)->middleware('auth')->group(function(){
    Route::get('Announcement', 'index')->name('Operator.Announcement.index');
    // Route::get('Announcement/create', 'create')->name('Operator.Announcement.create');
    // Route::post('Announcement/store', 'store')->name('Operator.Announcement.store');
});
