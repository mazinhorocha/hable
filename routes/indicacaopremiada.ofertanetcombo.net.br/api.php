<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

$router->post('/api/indicacoes', 'IndicadorController@todasIndicacoes');

$router->post('/api/cadastrar', 'IndicadorController@create');

$router->post('/api/indicar',  'IndicacaoController@create');
