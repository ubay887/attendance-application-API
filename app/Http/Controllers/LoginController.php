<?php

namespace App\Http\Controllers;

use Hash;
use App\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //        

        $tbuser = Login::all();

        $login = new Login;        

        $login->nama = $request->nama;
        $login->email = $request->email;
        $login->password = $request->password;    

        foreach ($tbuser as $u) {
            # code...
            if( $login->nama == $u->nama ){
                if($login->email == $u->email){
                    if(Hash::check($login->password, $u->password)){
                        return response()->json(
                            [
                                "message" => 'LOGIN BERHASIL',
                                "user_id" => $u->id_user,
                            ]
                        );
                    }else{
                        return response()->json('LOGIN GAGAL');
                    }
                }
            }
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //                

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
