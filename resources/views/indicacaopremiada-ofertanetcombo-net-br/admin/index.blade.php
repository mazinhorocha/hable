@extends('indicacaopremiada-ofertanetcombo-net-br.admin.layout')

@section('content')

    <div class="container-fluid">

        <div class="row min-vh-100">
            <aside class="col-lg-2 col-sm-2 col-md-2 p-0 bg-menu">
                <nav class="navbar navbar-expand navbar-dark flex-md-column flex-row align-items-start py-2">
                    <div class="collapse navbar-collapse">
                        <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                            <li class="nav-item">
                                <a class="nav-link pl-0 pt-4 text-nowrap" href="/admin-usuario"><i class="fa fa-user fa-fw"></i> <span class="d-none d-md-inline">Usuários</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0 pt-4 text-nowrap" href="/admin-agenda"><i class="fa fa-check-circle fa-fw"></i> <span class="d-none d-md-inline">Agendar visitas</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0 pt-4 text-nowrap" href="/admin-checking"><i class="fa fa-check-circle fa-fw"></i> <span class="d-none d-md-inline">Checking da visita</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0 pt-4 text-nowrap" href="/admin-visitas-realizadas"><i class="fa fa-bars fa-fw"></i> <span class="d-none d-md-inline">Visitas realizadas</span></a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link pl-0 pt-4 text-nowrap" href="#"><i class="fa fa-bars fa-fw"></i> <span class="d-none d-md-inline">Indicações</span></a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </nav>
            </aside>
            <main style="background-color: #f9992f94" class="col p-3">
                @if($page[0] == 'index')
                    @include('indicacaopremiada-ofertanetcombo-net-br.admin.index')
                @else
                    @include('indicacaopremiada-ofertanetcombo-net-br.admin.'.$page[0])
                @endif
            </main>
        </div>
    </div>

@stop

<style>
    .bg-menu{
        background-color: #37324bba;
        color: white;
    }
</style>

