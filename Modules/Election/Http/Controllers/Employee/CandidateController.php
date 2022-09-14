<?php

namespace Modules\Election\Http\Controllers\Employee;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Election\Entities\Candidate;
use Illuminate\Contracts\Support\Renderable;
use Modules\Election\Http\Requests\Employee\CandidateStoreRequest;

class CandidateController extends Controller
{
     /**
     * @var Candidate|Builder
     */
    private $Candidate;

    /**
     * MonthlyCandidateController constructor.
     * @param Candidate $Candidate
     */
    public function __construct(Candidate $Candidate)
    {
        $this->Candidate = $Candidate;
    }


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($place)
    {
        $CandidatesQuery = $this->Candidate
            ->where('place', 'like', "%$place%");

        $Candidates = $CandidatesQuery->paginate();

        return view('election::employee.candidate.index', [
            'Candidates' => $Candidates,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create($place)
    {
        return view('election::employee.candidate.create', compact('place'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CandidateStoreRequest $request)
    {

        $data = $this->prepareData($request);
        $Candidate = $this->Candidate->create($data);


        $request->session()->flash('alert-success', 'عملیات با موفقیت انجام شد');

        return redirect()->route('Employee.Candidates.index', ['place'=> $request->place]);

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('election::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('election::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

      /**
     * prepare data for create|update an performance
     *
     * @param Request $request
     * @return array
     */
    private function prepareData($request)
    {

        $path = 'election/';
        $resume_file = \App\Services\UploaderService::fileUploader($request->resume_file, $path);
        $status = Status::where('status', 'تایید نشده')->first();
        if(! $status)
        {
            $status = Status::create([
                'status' => 'تایید نشده',
                'color' => 'theme-12'
            ]);
        }

        $data = [
            'place' => auth()->user()->workplace ?? 'تهران',
            'education' => $request->input('education'),
            'resume_file' => $resume_file,
            'user_id' => auth()->user()->id,
            'status_id' => $status->id,
        ];

        return $data;
    }

    public function changeStatus(Request $request,Candidate $Candidate)
    {
        $status = Status::where('status', $request->status)->first();
        if(! $status)
        {
            $status = Status::create([
                'status' => $request->status,
                'color' => 'theme-12'
            ]);
        }
        $Candidate->update([
            'status_id' => $status->id
        ]);
        $request->session()->flash('alert-success', 'عملیات با موفقیت انجام شد');
        return redirect()->back();
    }

}
