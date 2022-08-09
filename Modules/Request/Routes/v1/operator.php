<?php

/* -------------------------------------------------------------------------- */
/*                                Request  Operator route                       */
/* -------------------------------------------------------------------------- */
Route::controller(RequestController::class)->middleware('auth')->group(function(){

});
