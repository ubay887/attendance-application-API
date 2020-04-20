<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register','pegawaiController@apiRegister');

Route::get('/gaji/{id}','GajiController@apiall');
Route::post('/gaji','GajiController@apitambah');
Route::delete('/gaji/{id}','GajiController@apihapus');

Route::post("/ijin/{user_id}","IjinController@ijin");
Route::get('/ijin/{user_id}','IjinController@apiall');

Route::post("/cuti/{user_id}","CutiController@cuti");
Route::get("/cuti/{user_id}","CutiController@apiall");

Route::post("/absen/{user_id}","AbsenController@absen");

Route::get("/tugas/{user_id}","PenugasanController@apiall");
Route::delete("/tugas/selesai/{id_tugas}","PenugasanController@hapuspenugasan");