<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Home;
use App\Perusahaan;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Profile::count();
        $perusahaan = Perusahaan::all();
        //return $perusahaan;             
        return view('home',[
            "user"=>$user,
            "perusahaan"=>$perusahaan
        ]);
    }
}
