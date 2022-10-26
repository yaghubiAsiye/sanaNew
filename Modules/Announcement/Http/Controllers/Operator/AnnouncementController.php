<?php

namespace Modules\Announcement\Http\Controllers\Operator;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Announcement\Entities\Announcement;
use Modules\Announcement\Http\Requests\Operator\AnnouncementStoreRequest;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('announcement::operator.announcement.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('announcement::operator.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(AnnouncementStoreRequest $request)
    {

        $announcement = Announcement::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->user()->id,
            'view' => 0,
        ]);

        $request->session()->flash('alert-success', 'عملیات با موفقیت انجام شد');
        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(Announcement $announcement)
    {
        return view('announcement::operator.announcement.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('announcement::operator.announcement.edit');
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
}
