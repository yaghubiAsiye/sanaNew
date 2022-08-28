<?php

namespace App\Http\Controllers\V1\Site\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Models\ActiveCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\V1\Site\LoginRequest;
use App\Http\Requests\V1\Site\PhoneRequest;
use App\Notifications\ActiveCodeNotification;

class LoginController extends Controller
{

    public function showLogin()
    {
        return view('pages.site.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $user = User::wherePhone($request->phone)->first();
        if($user->active)
        {
            $request->session()->flash('error' , 'شما غیر فعال هستید! لطفا با شماره ۰۲۱۸۲۸۴۹۵۰۹ تماس بگیرید');
            return redirect()->back();
        }

        $code = ActiveCode::generateCode($user);

        $request->session()->flash('auth' , [
            'user_id' => $user->id,
            'remember' => $request->has('remember')
        ]);

        $user->notify(new ActiveCodeNotification($code, $user->phone));

        return redirect(route('active-code'));

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
