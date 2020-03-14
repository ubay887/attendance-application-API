<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    //
    protected $table = "tbperusahaan";
    protected $fillable = ['nama_perusahaan','email_perusahaan'.'telpon_perusahaan','industri','alamat_perusahaan'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
