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
use App\Http\Controllers\EmailController;


/*$router->post('/api/salvar-contato', function (Request $request) use ($router) {

    $response = ['e-mail enviado com sucesso!'];

    $dados = [
        'nome'   => filter_var($request->nome, FILTER_SANITIZE_STRING),
        'numero' => filter_var($request->numero, FILTER_SANITIZE_NUMBER_INT),
        'email'  => filter_var($request->email, FILTER_SANITIZE_EMAIL),
        'data_envio' => \Carbon\Carbon::now()->format('d/m/Y H:i')
    ];

    try {

        Queue::push(new SendEmailJob($dados));

        return $response;

    } catch (Exception $ex) {
        return $response = ['Erro ao enviar o e-mail', $ex];
    }
    dump($router);
});*/

$router->post('/api/salvar-contato', 'EmailController@store');