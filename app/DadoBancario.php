<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadoBancario extends Model
{
  protected $fillable = [
      'banco',
      'agencia',
      'conta'
  ];
  protected $table = 'hableempresas.dados_bancarios';

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'usuario_id');
    }



}