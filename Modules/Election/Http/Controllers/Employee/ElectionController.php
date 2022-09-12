<?php

namespace Modules\Election\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Election\Entities\Election;
use Modules\Election\Entities\Candidate;
use Illuminate\Contracts\Support\Renderable;

class ElectionController extends Controller
{

    public function selectElection($place)
    {
        $candidates = Candidate::where('place', $place)
        ->where('status_id', 11)
        ->get();
        return view('election::employee.election.select-election', compact('candidates', 'place'));
    }

    public function storeElection(Request $request)
    {
        foreach($request->candidate_id as $item)
        {

            $election = Election::create([
                'candidate_id' => $item,
                'user_id' => auth()->user()->id
            ]);
        }

        $request->session()->flash('alert-success', 'عملیات با موفقیت انجام شد');

        return redirect()->route('Employee.Candidates.index', ['place'=>$request->place]);
    }
}
