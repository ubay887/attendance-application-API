<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/','HomeController@index');

    Route::get('/chart',function(){
        return view('chart');
    });

//crud pegawai

    //index
    Route::get('/pegawai','pegawaiController@index');

    //submit 
    Route::post('/pegawai/submit', 'pegawaiController@store');

    //delete
    Route::delete('/pegawai/delete/{id_user}','pegawaiController@destroy');

    Route::get('/manajemenPegawai',function(){
        return view('manajemenPegawai');
    });

    //SEARCH
    Route::get('/pegawaicari','pegawaiController@cari');

    

//end crud pegawai


// cuti

// Route::get('/pengajuan', function () {
//     return view('pengajuan');
// });
Route::get('/pengajuan','CutiController@show');

// delete
Route::delete('/pengajuan/delete/{id}','CutiController@destroy');

// end cuti


Route::get('/dataAbsensi', function () {
    return view('dataAbsensi');
});

Route::get('/penugasan','PenugasanController@show');

Route::get('/slipGaji',function(){
    return view('slipGaji');
});

Route::get('/setting',function(){
    return view('setting');
});

Route::get('/editPerusahaan',function(){
    return view('editPerusahaan');
});

//crud edit perusahaan
    Route::post('editPerusahaan/submit','PerusahaanController@store');
//end edit perusahaan

Route::get('/editKaryawan',function(){
    return view('editKaryawan');
});

Route::get('/editProfile',function(){
    return view('editProfile');
});

Route::get('/akun',function(){
    return view('akun');
});

Route::get('/password',function(){
    return view('password');
});

Route::get('/pendidikan',function(){
    return view('pendidikan');
});

Route::get('/arsipFile',function(){
    return view('arsipFile');
});


// Route::get('/ijin',function(){
//     return view('ijin');
// });

// ijin
Route::get('/ijin','IjinController@show');

// delete
Route::delete('/ijin/delete/{id}','IjinController@destroy');



//crud tambah penguasan    

    Route::post('/tambahPenugasan/submit','PenugasanController@store');

    Route::get('/tambahPenugasan',
    'PenugasanController@index');

    Route::delete('/penugasan/delete/{id}','PenugasanController@destroy');

//end tambah penugasan



Route::get('/updateGaji',function(){
    return view('updateGaji');
});

