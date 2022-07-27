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


    /**
    //  * showLogin
    //  # Date: 2022/6/22 , Developr: Asiye Yaghubi
    //  * @return void
    //  */
    // public function showLogin()
    // {
    //     return view('pages.site.auth.login');
    // }




    // public function sendOtp(PhoneRequest $request)
    // {
    //     $user = User::wherePhone($request->phone)->first();
    //     $code = ActiveCode::generateCode($user);
    //     $request->session()->flash('phone' , $user->phone);
    //     $user->notify(new ActiveCodeNotification($code, $user->phone));
    //     return redirect()->route('login-otp');
    // }

    // public function showLoginOtp()
    // {
    //     session()->reflash('phone');
    //     return view('pages.site.auth.login-otp');
    // }




    // public function login(LoginRequest $request)
    // {
    //     if(session()->has('phone'))
    //     {
    //         $user = User::wherePhone(session('phone'))->first();
    //         $status = ActiveCode::verifyCode($request->code , $user);
    //         if($status) {
    //             $user->activeCode()->delete();

    //             // dd(Auth::attempt(['phone' => $user->phone, 'password' => $request->password]));

    //             if(Auth::attempt(['phone' => $user->phone, 'password' => $request->password]))
    //             {


    //                 $request->session()->flash('alert-success' , 'خوش آمدید!');
    //                 return redirect()->intended('home');
    //                 // if(auth()->loginUsingId($user->id))
    //                 // {
    //                 //     $request->session()->flash('alert-success' , 'خوش آمدید!');
    //                 //     return redirect()->route('home');
    //                 // }
    //             } else{
    //                 $request->session()->flash('alert-danger' , 'پسورد وارد شده نادرست است!');

    //                 return redirect()->route('login');
    //             }


    //         } else
    //         {

    //             $request->session()->flash('alert-danger' , 'کد وارد شده نادرست است!');

    //             return redirect()->route('login');
    //         }
    //     }
    //     else {


    //         $request->session()->flash('alert-danger' , 'شماره تلفن خود را دوباره وارد کنید!');

    //         return redirect()->route('login');
    //     }



    // }







}
