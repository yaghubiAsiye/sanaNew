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
        $candidates = Candidate::where('place', 'like', "%$place%")
        ->where('status_id', 10)
        ->get();
        return view('election::employee.election.select-election', compact('candidates', 'place'));
    }

    public function storeElection(Request $request)
    {
        $myCandidates = Election::where('user_id', auth()->user()->id)->get();
        if(count($myCandidates) > 0)
        {
            $request->session()->flash('alert-danger', 'شما قبلا نمایندگان خود را انتخاب کرده اید !');
            return redirect()->back();
        }
        if(count($request->candidate_id) > 2)
        {
            $request->session()->flash('alert-danger', 'شما مجاز به انتخاب حداکثر دو نفر هستید ! ');
            return redirect()->back();
        }
        if(count($request->candidate_id) <= 1 )
        {
            $request->session()->flash('alert-danger', 'شما باید دو نفر را انتخاب کنید! ');
            return redirect()->back();
        }

        foreach($request->candidate_id as $item)
        {

            $election = Election::create([
                'candidate_id' => $item,
                'user_id' => auth()->user()->id
            ]);
        }

        $request->session()->flash('alert-success', 'عملیات با موفقیت انجام شد');

        return redirect()->route('Employee.Elections.myCandidates');
    }

    public function myCandidates()
    {
        $myCandidates = Election::where('user_id', auth()->user()->id)
        ->get();


        return view('election::employee.election.my-candidates', compact('myCandidates'));
    }

    public function resultElections($place)
    {
        $resultCandidates = Candidate::where('place', 'like', "%$place%")
        ->where('status_id', 10)
        ->get();

        return view('election::employee.election.result-candidates', [
            'Candidates' => $resultCandidates,
        ]);
    }

    public function resultElectionsSingle($candidate)
    {
        $Candidate = Candidate::where('id', $candidate)
        ->first();

        return view('election::employee.election.result-candidates-single', [
            'Candidate' => $Candidate,
        ]);
    }
}
