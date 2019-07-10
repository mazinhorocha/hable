<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $fillable = [
      'nome',
      'cpf',
      'fone',
      'tipo',
      'senha'
  ];

  protected $table = 'hableempresas.usuarios';
  
  protected $hidden = 'senha';

    public function indicacoes()
    {
        return $this->hasMany('App\Indicacao');
    }

    public function condominios()
    {
        return $this->hasMany('App\Condominio');
    }

    public function dadosBancarios()
    {
        return $this->hasMany('App\DadoBancario');
    }

    public function visitas()
    {
        return $this->hasMany('App\Visitas');
    }
}