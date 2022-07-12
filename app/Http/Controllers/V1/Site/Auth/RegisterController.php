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
        //TODOs: add address,city, gender
        // $validData = Validator::make($request->all(), [
        //     'first_name' => 'required|string|max:255|min:3',
        //     'last_name' => 'required|string|max:255|min:3',
        //     'phone' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric|unique:users,phone',
        //     'email' => 'requiredemail|unique:users,email',
        //     'password' => 'required|min:5',
        // ]);
        // $validData = $request->validate([
        //     'first_name' => 'required|string|max:255|min:3',
        //     'last_name' => 'required|string|max:255|min:3',
        //     'phone' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric|unique:users,phone',
        //     'email' => 'requiredemail|unique:users,email',
        //     'password' => 'required|min:5',
        // ]);
        // if($validData->fails()) 
        // {

        //     return redirect()->back() ->withErrors($validData)
        //     ->withInput();;
        // }
        // dd($request->ip());
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
