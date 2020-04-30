<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    //

    public $timestamps = false;
    protected $fillabele = ['tanggapan','id_user'];
    protected $primaryKey = "id";
    protected $table = "tbtanggapan";
    

}
