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
    return  view('indicacaopremiada-ofertanetcombo-net-br.index')->withPage(array('index'));
});

$router->get('/page-indicar', function () {
    return view('indicacaopremiada-ofertanetcombo-net-br.index')->withPage(array('form_indique'));
});

$router->get('/page-cadastrar', function () {
    return view('indicacaopremiada-ofertanetcombo-net-br.index')->withPage(array('form_cadastro'));
});

$router->get('/page-cadastrar-endereco', function () {
    return view('indicacaopremiada-ofertanetcombo-net-br.index')->withPage(array('form_cadastro_endereco'));
});

$router->get('/page-cadastrar-dados-bancarios', function () {
    return view('indicacaopremiada-ofertanetcombo-net-br.index')->withPage(array('form_cadastro_dados_bancarios'));
});

$router->get('/page-acompanhar', function () {
    return view('indicacaopremiada-ofertanetcombo-net-br.index')->withPage(array('form_acompanhe'));
});

$router->get('/admin', function () {
    return view('indicacaopremiada-ofertanetcombo-net-br.admin.index')->withPage(array('login'));
});

$router->get('/admin-usuario', function () {
    return view('indicacaopremiada-ofertanetcombo-net-br.admin.index')->withPage(array('form_cadastro_usuario'));
});

$router->get('/admin-agenda', function () {
    return view('indicacaopremiada-ofertanetcombo-net-br.admin.index')->withPage(array('agenda_visitas'));
});

$router->get('/admin-checking', function () {
    return view('indicacaopremiada-ofertanetcombo-net-br.admin.index')->withPage(array('checking'));
});

$router->get('/admin-visitas-realizadas', function () {
    return view('indicacaopremiada-ofertanetcombo-net-br.admin.index')->withPage(array('visitas_realizadas'));
});




