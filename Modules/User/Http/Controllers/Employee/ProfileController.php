<?php

namespace Modules\User\Http\Controllers\Employee;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function profile()
    {
        return view('user::employee.profile.index');
    }

}
