<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
    protected $table = 'tbuser';
    protected $primaryKey = 'id_user';
    public $timestamps = false;
}
