<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //
    protected $PrimaryKey = "id_usuario";


    public function venda(){

        return $this->hasOne('App\venda');
    }
}
