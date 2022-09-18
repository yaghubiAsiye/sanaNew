<?php

use Modules\Election\Http\Controllers\Employee\CandidateController;


/* -------------------------------------------------------------------------- */
/*                                 Candidate Employee route                       */
/* -------------------------------------------------------------------------- */
Route::controller(CandidateController::class)->middleware('auth')->group(function(){
    Route::get('Candidates/{place}', 'index')->name('Employee.Candidates.index');
    Route::get('Candidates/create/{place}', 'create')->name('Employee.Candidates.create');
    Route::post('Candidates/store', 'store')->name('Employee.Candidates.store');
    Route::put('Candidates/changeStatus/{Candidate}', 'changeStatus')->name('Employee.Candidates.changeStatus');
});

Route::controller(ElectionController::class)->middleware('auth')->group(function(){
    Route::get('Elections/{place}', 'selectElection')->name('Employee.Elections.selectElection');
    Route::post('Elections/store', 'storeElection')->name('Employee.Elections.storeElection');
    Route::get('candidates/myCandidates', 'myCandidates')->name('Employee.Elections.myCandidates');
    Route::get('resultElections/{place}', 'resultElections')->name('Employee.Elections.resultElections');
    Route::get('resultElectionsSingle/{candidate}', 'resultElectionsSingle')->name('Employee.Elections.resultElectionsSingle');

});

