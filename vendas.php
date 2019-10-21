<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    //
    protected $PrimaryKey = "id_venda";



    public function produto(){

        return $this->hasOne('App\Produto');
    }
}
