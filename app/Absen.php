<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = "tbabsen";
    protected $primaryKey = "id";
    protected $fillable = ['photo','timestamp','status','type','point'];

    Public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class , 'id_user');
    }
    
}
