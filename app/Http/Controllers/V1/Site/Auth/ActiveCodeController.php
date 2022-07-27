<?php

namespace App\Http\Controllers\V1\Site\Auth;

use App\Models\User;
use App\Models\ActiveCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Site\ActiveCodeRequest;

class ActiveCodeController extends Controller
{

    public function showActiveCode(Request $request)
    {
        if(! $request->session()->has('auth'))
        {
            return redirect(route('login'));
        }

        $request->session()->reflash();

        return view('pages.site.auth.active-code');

    }

    public function activeCode(ActiveCodeRequest $request)
    {
        if(! $request->session()->has('auth'))
        {
            return redirect(route('login'));
        }

        $user = User::findOrFail($request->session()->get('auth.user_id'));

        $status = ActiveCode::verifyCode($request->code , $user);

        if(! $status)
        {
            $request->session()->flash('alert-danger' , 'کد وارد شده نادرست است لطفا دوباره تلاش کنید!');
            return redirect(route('login'));
        }

        if(auth()->loginUsingId($user->id, $request->session()->get('auth.remember')))
        {
            $user->activeCode()->delete();
            return redirect()->route('home');
        }

        return redirect(route('login'));


    }

}
