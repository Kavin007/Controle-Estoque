<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Produto extends Model
{
    

    public $timestamps = false;
    protected $table = 'produto';
    protected $fillable = ['nome', 'preco', 'descricao', 'fornecedor_id'];

    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');
    }
}
