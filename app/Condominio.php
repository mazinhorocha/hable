<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
  protected $fillable = [
      'cep',
      'endereco',
      'bairro',
      'cidade',
      'estado',
      'sindico',
      'obs'
  ];
  protected $table = 'hableempresas.condominios';

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'usuario_id');
    }



}