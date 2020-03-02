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
}
