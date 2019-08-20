<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{

   


    public $timestamps = false;
    protected $table = 'fornecedor';
    protected $fillable = ['nome', 'cnpj', 'email'];

    public function produto(){
        return $this->hasMany('App\Produto');
    }
}
