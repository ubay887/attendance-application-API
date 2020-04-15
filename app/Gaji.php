<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    public $timestamps = false;
    protected $table = "tbgaji";
    protected $primaryKey = "id";
    protected $fillable = ['jumlah','bonus','potongan','subtotal','bulan'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class , 'id_user');
    }

    public function user(){
        return $this->belongsTo(Profile::class , 'id_user');
    }

}
