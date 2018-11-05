<?php

namespace TestLaravel\Http\Controllers\Auth;

use TestLaravel\Http\Controllers\Controller;
/**
 * registerに同じくこのuseしてるライブラリにログイン処理とログアウト処理のメソッドが存在している
 */
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(\Illuminate\Http\Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        //redirectの引数を/homeに変更
        return $this->loggedOut($request) ?: redirect('/home');
    }
}
