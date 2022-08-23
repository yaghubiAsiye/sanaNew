<?php

namespace Modules\Recruitment\Http\Controllers\Operator;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Recruitment\Entities\Recruitment;
use Modules\Recruitment\Entities\RecruitmentChecker;
use Modules\Recruitment\Http\Requests\Operator\RecruitmentStoreRequest;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $recruitments = Recruitment::all();
        return view('recruitment::operator.index', [
            'data' => $recruitments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('recruitment::operator.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(RecruitmentStoreRequest $request)
    {

        $path = 'Recruitment/';
        $file = \App\Services\UploaderService::fileUploader($request->file, $path);

        $recruitment = Recruitment::create([
            'name' => $request->name,
            'family' => $request->family,
            'job' => $request->job,
            'vahedSazmani' => $request->vahedSazmani,
            'mahaleKhedmat' => $request->mahaleKhedmat,
            'description' => $request->description,
            'file' => $file,
            'sharheMavaqa' => 'تعیین نشده',
            'status_id' => 5,
        ]);

        $recruitmentChecker = RecruitmentChecker::create([
            'recruitment_id' => $recruitment->id,
            'user_id' => auth()->user()->id,
            'status_id' => 5,
        ]);

        $request->session()->flash('alert-success' , 'عملیات موفق بود!');
        return redirect()->route('Operator.Recruitment.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('recruitment::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('recruitment::edit');
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

    public function changeResult(Request $request, Recruitment $recruitment)
    {
        $recruitment->sharheMavaqa = $request->sharheMavaqa;
        $recruitment->save();
        $request->session()->flash('alert-success' , 'عملیات موفق بود!');
        return redirect()->back();

    }

    public function changeStatusShow(Recruitment $recruitment)
    {
        return view('recruitment::operator.changeStatus',[
            'recruitment' => $recruitment
        ]);

    }

    public function changeStatusUpdate(Request $request, Recruitment $recruitment)
    {
        $recruitment->sharheMavaqa = $request->sharheMavaqa;
        $recruitment->save();
        $request->session()->flash('alert-success' , 'عملیات موفق بود!');
        return redirect()->back();

    }
}
