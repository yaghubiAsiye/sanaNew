<?php

/* -------------------------------------------------------------------------- */
/*                                 User Employee route                       */
/* -------------------------------------------------------------------------- */
Route::controller(ProfileController::class)->middleware('auth')->group(function(){
    Route::get('profile', 'profile')->name('User.profile');
});
