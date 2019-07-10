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


$router->get('/', function () use ($router) {

    $produtos = json_decode(file_get_contents(storage_path('data/produtos.json')));
    $servicos = json_decode(file_get_contents(storage_path('data/servicos.json')));
    $strings = json_decode(file_get_contents(storage_path('data/strings.json')));

    return app('view')
        ->make('empresarialclaro-com-br.index')
        ->with('strings', $strings)
        ->with('produtos', $produtos)
        ->with('servicos', $servicos);

});


//$router::domain('planosnet.net.br')->group(function () {
////    $router->get('/', function () use ($router) {
////        echo 'reste';
////    });
//});
//
