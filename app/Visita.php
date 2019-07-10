<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
  protected $fillable = [
      'data',
      'lat',
      'lon',
      'tipo'
  ];

  protected $table = 'hableempresas.visitas';

    public function condominio()
    {
        return $this->belongsTo('App\Condominio', 'condominio_id');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'usuario_id');
    }
}