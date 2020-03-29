<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;

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
    public function redirectTo(){

        // User role
        //$role = Auth::user()->role->name;
        $user=auth()->user();
        $role=$user->fkuserTypeId;
        // Check user role
        switch ($role) {
            case '7':
                return 'user';
                break;
            case '1':
                return 'home';
                break;
            case '2':
                return 'restaurant';
                break;
            case '3':
                return 'manager';
                break;
            case '4':
                return 'chef';
                break;
            case '5':
                return 'homecook';
                break;
            case '6':
                return 'driver';
                break;

            default:
                return '/login';
                break;
        }
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
