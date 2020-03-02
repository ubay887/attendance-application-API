<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Penugasan extends Model
{
    //

    public $timestamps = false;
    protected $table = "tbpenugasan";
    protected $primaryKey = "id";
    protected $fillable = ['deadline','detail','judul','pengecek','tgl_diberikan_tugas'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class , 'id_user');
    }

}
