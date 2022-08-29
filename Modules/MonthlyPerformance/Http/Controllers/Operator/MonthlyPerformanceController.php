<?php

namespace Modules\MonthlyPerformance\Http\Controllers\Operator;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\MonthlyPerformance\Entities\MonthlyPerformanceLog;
use Modules\MonthlyPerformance\Http\Requests\Operator\MonthlyPerformanceStoreRequest;

class MonthlyPerformanceController extends Controller
{
    /**
     * @var MonthlyPerformanceLog|Builder
     */
    private $performance;

    /**
     * MonthlyPerformanceController constructor.
     * @param MonthlyPerformanceLog $performance
     */
    public function __construct(MonthlyPerformanceLog $performance)
    {
        $this->performance = $performance;
    }


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $performancesQuery = $this->performance
            ->where('parent_id', 0);

        $performances = $performancesQuery->paginate();

        return view('monthlyperformance::operator.performance.index', [
            'performances' => $performances,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('monthlyperformance::operator.performance.create');
    }

     /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(MonthlyPerformanceStoreRequest $request)
    {
        $data = $this->prepareData($request);
        $performance = $this->performance->create($data);


        $request->session()->flash('alert-success', 'عملیات با موفقیت انجام شد');

        return redirect()->route('Operator.Performance.index');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('monthlyperformance::show');
    }

     /**
     * prepare data for create|update an performance
     *
     * @param Request $request
     * @return array
     */
    private function prepareData($request)
    {
        $path = 'monthlyperformance/';
        $file_1 = \App\Services\UploaderService::fileUploader($request->file_1, $path);
        $file_2 = \App\Services\UploaderService::fileUploader($request->file_2, $path);

        $data = [
            'title' => $request->input('title'),
            'type' => $request->input('type'),
            'file_1' => $file_1,
            'file_2' => $file_2,
            'user_id' => auth()->user()->id,
            'parent_id' => 0,
        ];

        return $data;
    }




}
