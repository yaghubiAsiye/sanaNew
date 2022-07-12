<?php

namespace App\Http\Controllers\V1\Site\Auth;

use App\Models\User;
use App\Models\ActiveCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Site\LoginRequest;
use App\Notifications\ActiveCodeNotification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{    
    /**
     * showLogin
     # Date: 2022/6/22 , Developr: Asiye Yaghubi
     * @return void
     */
    public function showLogin()
    {
        return view('pages.site.auth.login');
    }
    
    public function login(LoginRequest $request)
    {
        $user = User::wherePhone($request->phone)->first();
        if(auth()->loginUsingId($user->id)) {
            if(! $user->phone_verified_at)
            {
                return redirect()->route('reset-password-phone');
            } else if((! $user->password_update_at))
            {
                return view('pages.site.auth.reset-password-3');
            }
            return redirect(route('home'));
            
            
        }
   
    }

    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect(route('login'));
    }

    
}
