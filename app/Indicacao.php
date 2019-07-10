<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicacao extends Model
{
  protected $fillable = [
      'nome',
      'cpf',
      'fone1',
      'fone2',
      'obs'
  ];
  protected $table = 'hableempresas.indicacoes';

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'usuario_id');
    }



}