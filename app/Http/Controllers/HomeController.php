<?php

namespace App\Http\Controllers;

use App\User;
use App\Home;
use App\Ijin;
use App\Cuti;
use App\Perusahaan;
use App\Absen;

use DB;
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
        $user = User::count();
        $cuti = Cuti::count();
        $Ijin = Ijin::count();
        $absen = Absen::count();
        $pengajuan = $Ijin + $cuti;
        $perusahaan = Perusahaan::all();
        $absens = Absen::with('user')->get();
        $absens = DB::table('tbuser')
                    ->join('tbabsen','tbabsen.id_user','=','tbuser.id_user')
                    ->select('tbuser.nama','tbabsen.photo','tbabsen.timestamp','tbabsen.status','tbabsen.type','tbabsen.point','tbabsen.deskripsi','tbabsen.id_user')
                    ->get();
        //return $perusahaan;             
        return view('home',[
            "user"=>$user,
            "perusahaan"=>$perusahaan,
            "pengajuan"=>$pengajuan,
            "absen"=>$absen,
            "absens"=>$absens
        ]);
    }
}
