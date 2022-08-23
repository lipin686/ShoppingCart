<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;     //直接引入trait 意思等於trait裡面的function 這裡也能用

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');   //Kernal內有定義guest別名的實際路徑
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function username()
    {
        return 'name';
    }
    public function loggedOut(Request $request)
    {

        return redirect('/login');
    }
    function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
            'captcha' => 'required|captcha',
        ],[
            'captcha.required' => '驗證碼不得為空，請輸入',
            'captcha.captcha' => '驗證碼錯誤，請重新輸入',
        ]);
    }
}
