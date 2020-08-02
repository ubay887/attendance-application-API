<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth; 

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo(){
        $role  = Auth::user()->role;
            // dd($role);

            if ($role=='admin') {
                return '/';
                
                // dd('admin');
            }
            else{
                // return '/pegawai';
                return redirect('/err')->with('error','Maaf kamu tidak memiliki akses admin');
                // return '/err';
                // return redirect('/login');
                // dd('kamu tidak terdaftar sebagai admin');

            }

        // $role  = Auth::user()->role;
        // switch($role){
        //     case 'admin';
        //     return '/';
        //     break;
        //     case 'user';
        //     return '/pegawai';
        //     default: 
        //     return '/login';
        //     break;
        // }

        // if ($role !='admin') {
        //     return redirect('/login')->with('error','Maaf kamu tidak memiliki akses admin');

        //     // return 'y';
        // }
        // else{
        //     return '/';
        //     // return 'bukan';

        // }

        //  switch($role){
        //     case 'admin';
        //     return '/';
        //     break;
        //     default:
        //     return '/login';
        //     break;
        // }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
