<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    protected $table = "tbprofile";    
    protected $primaryKey = "id_user";
    public $timestamps = false;

    public $incrementing = false;

    public function user(){
        return $this ->belongsTo(Pegawai::class,'id_user');
    }

    // public function absen(){
    //     return $this ->belongsTo(Pegawai::class,'id_user');
    // }

    public function absen(){
        return $this->hasMany(Absen::class , 'id_user');
    }
}

