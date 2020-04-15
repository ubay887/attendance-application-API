<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ijin extends Model
{
    public $timestamps = false;
    protected $table = "tbijin";
    protected $primaryKey = "id";
    protected $fillable = ['alasan_ijin','lama_hari','tgl_mulai','desc'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class , 'id_user');
    }

    public function user(){
        return $this->belongsTo(Profile::class , 'id_user');
    }
}
