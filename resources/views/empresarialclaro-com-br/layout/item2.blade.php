<div class="col-md-4 c-oferta text-center">

    <div class="c-bloco">

        <div class="">

            <picture>

                <source srcset="{{$srv->banner}}.webp" type="image/webp">
                <img src="{{$srv->banner}}.png">

            </picture>
        </div>
    </div>

    <div class="c-h">
        @switch($srv->tag)
            @case('GESTOR') <i class="fa fa-file-alt"></i> @break
            @case('PASSAPORTE') <i class="fa fa-plane-departure"></i>@break
            @case('SEM_EXCEDENTES') <i class="fa fa-download"></i>@break
        @endswitch
        {{$srv->nome}}
    </div>

    <div style="margin-top: -30px" class="c-t">
        {{$srv->texto}}
    </div>

</div>