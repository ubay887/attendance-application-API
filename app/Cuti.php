<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    //

    public $timestamps = false;
    protected $table = "tbcuti";
    protected $primaryKey = "id";
    protected $fillable = ['nama_cuti','lama_cuti','mulai_cuti','alasan','tgl_ajukan'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class , 'id_user');
    }

    public function user(){
        return $this->belongsTo(Profile::class , 'id_user');
    }

    

}
