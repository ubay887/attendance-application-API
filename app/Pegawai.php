<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //

    protected $table = "tbuser";    
    protected $primaryKey = "id_user";
    public $timestamps = false;
    protected $hidden =['password'];

    public function profile(){
        return $this->hasOne(Profile::class , 'id_user');
    }

    public function  penugasan(){
        return $this->hasMany(Penugasan::class , 'id_user');
    }

    public function  cuti(){
        return $this->hasMany(Cuti::class , 'id_user');
    }

    public function  ijin(){
        return $this->hasMany(Ijin::class , 'id_user');
    }

    public function  gaji(){
        return $this->hasMany(Gaji::class , 'id_user');
    }

    public function  absen(){
        return $this->hasMany(Absen::class , 'id_user');
    }
}
