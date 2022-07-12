<?php

namespace App\Http\Controllers\V1\Site\Auth;

use App\Models\User;
use App\Models\ActiveCode;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use App\Http\Requests\V1\Site\CodeRequest;
use App\Http\Requests\V1\Site\PhoneRequest;
use App\Notifications\ActiveCodeNotification;
use App\Http\Requests\V1\Site\ResetPasswordRequest;

class ResetPasswordController extends Controller
{    
    /**
     # Date: 2022/6/27 , Developr: Asiye Yaghubi
     * showPhonePage
     *
     * @return void
     */
    public function showPhonePage()
    {
        return view('pages.site.auth.reset-password-1-phone');
    }
    
    /**
     # Date: 2022/6/28 , Developr: Asiye Yaghubi
     * sendCode
     *
     * @param  mixed $request
     * @return void
     */
    public function sendCode(PhoneRequest $request)
    {
        $user = User::wherePhone($request->phone)->first();
        $code = ActiveCode::generateCode($user);
        $request->session()->flash('phone' , $user->phone);
        $user->notify(new ActiveCodeNotification($code, $user->phone));
        return redirect()->route('reset-password-code-page');
    }
        
    /**
     # Date: 2022/6/28 , Developr: Asiye Yaghubi
     * showCodePage
     *
     * @return void
     */
    public function showCodePage()
    {
        return view('pages.site.auth.reset-password-2-code');
    }
    
    /**
     # Date: 2022/6/28 , Developr: Asiye Yaghubi
     * verifyCode
     *
     * @param  mixed $request
     * @return void
     */
    public function verifyCode(CodeRequest $request)
    {
        
        $status = ActiveCode::verifyCode($request->code , $request->user());
        if($status) {
            $request->user()->activeCode()->delete();
            $request->user()->update([
                'phone_verified_at' => Carbon::now(),
            ]);

            $request->session()->flash('alert-success' , 'شماره موبایل شما تایید شد!');
            return redirect()->route('reset-password-page');

        } else {
            $request->session()->flash('alert-danger' , 'کد وارد شده نادرست است!');
           
            return redirect()->back();
        }
      
    }
    
    /**
     # Date: 2022/6/28 , Developr: Asiye Yaghubi
     * showResetPasswordePage
     *
     * @return void
     */
    public function showResetPasswordePage()
    {
        return view('pages.site.auth.reset-password-3');
    }
    
    /**
     # Date: 2022/6/28 , Developr: Asiye Yaghubi
     * resetPassword
     *
     * @param  mixed $request
     * @return void
     */
    public function resetPassword(ResetPasswordRequest $request)
    {   
        
        $request->user()->update([
            'password' => bcrypt($request->password),
            'password_update_at' => Carbon::now()
        ]);
        $request->session()->flash('alert-success' , 'پسورد شما با موفقیت به روز شد!');
        return redirect()->back();
    }

}
