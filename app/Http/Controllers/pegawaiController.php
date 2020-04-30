<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Profile;
use DB;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::with('profile')->get();
        // $pegawai = DB::table('tbuser')
        //             ->join('tbprofile','tbprofile.id_user','=','tbuser.id_user')
        //             ->select('tbuser.nama','tbuser.email','tbprofile.divisi','tbprofile.jabatan','tbprofile.tgl_mulai_kerja','tbuser.id_user','tbprofile.id_user','tbprofile.tgl_lahir','tbprofile.tempat_lahir','tbprofile.gol_darah','tbprofile.status','tbprofile.agama','tbprofile.tinggi_badan','tbprofile.berat_badan','tbprofile.nik_pegawai','tbprofile.jatah_cuti','tbprofile.jam_kerja','tbprofile.alamat')
        //             ->get();
        // $pegawai = Pegawai::all();
        // $profile = Profile::all();
        return view('pegawai',compact('pegawai'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        // $pegawai = DB::table('tbuser')
        //             ->join('tbprofile','tbprofile.id_user','=','tbuser.id_user')
        //             ->select('tbuser.nama','tbuser.email','tbprofile.divisi','tbprofile.jabatan','tbprofile.tgl_mulai_kerja','tbuser.id_user','tbprofile.id_user','tbprofile.tgl_lahir','tbprofile.tempat_lahir','tbprofile.gol_darah','tbprofile.status','tbprofile.agama','tbprofile.tinggi_badan','tbprofile.berat_badan','tbprofile.nik_pegawai','tbprofile.jatah_cuti','tbprofile.jam_kerja','tbprofile.alamat')
        //             ->where('nama','like',"%".$cari."%")
        //             ->get();
        $pegawai = Pegawai::where('nama','like',"%".$cari."%")->get();
        $profile = Pegawai::where('nama','like',"%".$cari."%")->get();
        return view('pegawai',compact('pegawai','profile'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('/pegawai/submit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pegawai $newPegawai)
    {
        //
        $validasi = $request->validate([
            "email" => "required",
            "nik_pegawai" => "required",
            "jam_kerja" => "required",
            "tgl_mulai_kerja" => "required",
            "nama" => "required",
            "devisi" => "required",
            "jatah_cuti" => "required",
            "status_karyawan" => "required",
            "no_hp" => "required",
            "jabatan" => "required",
            "no_ktp" => "required",
            "gender" => "required",
            "tgl_lahir" => "required",
            "tempat_lahir" => "required",
            "gol_darah" => "required",
            "agama" => "required",
            "tinggi_badan" => "required",
            "berat_badan" => "required",
            "alamat"=>"required",
        ]);
        
        $password = "siabsen@".$request->nik_pegawai;
        
        $pegawai = new Pegawai;
        $pegawai->email=$request->email;                
        $pegawai->password= bcrypt($password);
        $pegawai->nama = $request->nama;
        $pegawai->save();

        $profile = new Profile;
        $profile->id_user = $pegawai->id_user;
        $profile->nik_pegawai = $request->nik_pegawai;
        $profile->jam_kerja = $request->jam_kerja;
        $profile->tgl_mulai_kerja = $request->tgl_mulai_kerja;
        $profile->divisi = $request->devisi;
        $profile->jatah_cuti = $request->jatah_cuti;
        $profile->status = $request->status_karyawan;
        $profile->jabatan = $request->jabatan;
        $profile->no_ktp = $request->no_ktp;
        $profile->gender = $request->gender;
        $profile->tgl_lahir = $request->tgl_lahir;
        $profile->tempat_lahir = $request->tempat_lahir;
        $profile->gol_darah = $request->gol_darah;
        $profile->agama = $request->agama;
        $profile->tinggi_badan = $request->tinggi_badan;
        $profile->berat_badan = $request->berat_badan;
        $profile->alamat = $request->alamat;
        $profile->save();
                
        return redirect('/pegawai')->with('status','Data pegawai berhasil ditambahkan');
        
    }

    public function apiRegister(Request $request, Pegawai $newPegawai)
    {
        //        
        
        $pegawai = new Pegawai;
        $pegawai->email=$request->email;                
        $pegawai->password= bcrypt($request->password);
        $pegawai->nama = $request->nama;
        $pegawai->save();
        return $pegawai;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_user)
    {
        $pegawai = Pegawai::find($id_user);
        $profile = Profile::find($id_user);
        return view('editPegawai',compact('pegawai','profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user ,Pegawai $pegawai ,Profile $profile)
    {
         $validasi = $request->validate([
            "email" => "required",
            "nik_pegawai" => "required",
            "jam_kerja" => "required",
            "tgl_mulai_kerja" => "required",
            "nama" => "required",
            "devisi" => "required",
            "jatah_cuti" => "required",
            "status_karyawan" => "required",
            "no_hp" => "required",
            "jabatan" => "required",
            "no_ktp" => "required",
            "gender" => "required",
            "tgl_lahir" => "required",
            "tempat_lahir" => "required",
            "gol_darah" => "required",
            "agama" => "required",
            "tinggi_badan" => "required",
            "berat_badan" => "required",
            "alamat"=>"required",
        ]);
        
        $password = "siabsen@".$request->nik_pegawai;
        
        $pegawai = Pegawai::find($id);
        $pegawai->email=$request->email;                
        $pegawai->password= bcrypt($password);
        $pegawai->nama = $request->nama;
        $pegawai->save();

        $profile = Profile::find($id);
        $profile->id_user = $pegawai->id_user;
        $profile->nik_pegawai = $request->nik_pegawai;
        $profile->jam_kerja = $request->jam_kerja;
        $profile->tgl_mulai_kerja = $request->tgl_mulai_kerja;
        $profile->divisi = $request->devisi;
        $profile->jatah_cuti = $request->jatah_cuti;
        $profile->status = $request->status_karyawan;
        $profile->jabatan = $request->jabatan;
        $profile->no_ktp = $request->no_ktp;
        $profile->gender = $request->gender;
        $profile->tgl_lahir = $request->tgl_lahir;
        $profile->tempat_lahir = $request->tempat_lahir;
        $profile->gol_darah = $request->gol_darah;
        $profile->agama = $request->agama;
        $profile->tinggi_badan = $request->tinggi_badan;
        $profile->berat_badan = $request->berat_badan;
        $profile->alamat = $request->alamat;
        $profile->save();

        return redirect('/pegawai')->with('status','Data pegawai berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user)
    {
        
        $profile = Profile::findOrFail($id_user)->delete();
        $pegawai = Pegawai::findOrFail($id_user)->delete();

        return redirect('/pegawai');
    }
}