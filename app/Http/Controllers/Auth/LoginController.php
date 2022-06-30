<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    public function index() {
        return view('login');
    }

    public function authenticate(Request $request) {
        $creds = $request->only(['email', 'password']);

        if(Auth::attempt($creds)) {
            return redirect()->route('home');
        } else {
            return redirect()
            ->route('login')
            ->with('warning', '⚡ E-mail e/ou senha inválidos!')
            ->withInput();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
