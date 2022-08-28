<?php

namespace App\Http\Controllers\V1\Site\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\V1\Site\RegisterRequest;

class RegisterController extends Controller
{

    /**
     * register
     *
     # Date: 2022/6/22 , Developr: Asiye Yaghubi
     * @return void
     */
    public function showRegister()
    {
        return view('pages.site.auth.register');
    }

    public function register(RegisterRequest $request)
    {
       
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'register_ip' => $request->ip(),
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('login');

    }
}
