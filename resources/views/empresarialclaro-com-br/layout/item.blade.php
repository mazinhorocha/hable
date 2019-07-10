<div class="col boferta text-center">

    <div class="b-bloco">

        <h2 class="text-center b-bloco-h">{{$produto->nome}}</h2>
        <div class="b-srv">
            <div class="b-srv-icone">
                <i class="fa fa-phone"></i>
                <div class="b-src-t">
                    LIGAÇÕES <br>ILIMITADAS
                </div>
            </div>
            <div class="b-srv-icone">
                <i class="fab fa-whatsapp"></i>
                <div class="b-src-t" style="">
                    WHATSAPP<br> À VONTADE
                </div>
            </div>
        </div>


        <div class="b-apps">
            <div class="b-apps-h">Apps à vontade</div>
            <div>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-waze"></i>
                <i class="fab fa-cab"></i>
            </div>
        </div>

        <div class="b-preco">
            <div class="b-preco-valor">
                <div class="b-preco-moeda">
                    {{--                    <div class="b-preco-h">Apenas</div>--}}
                    <div>R$</div>
                </div>

                <div class="b-preco-inteiro">{{App\E\Util::parte_int($produto->valor)}}</div>

                <div class="b-preco-centavos">
                    <div style="margin-bottom: -9px;">,{{App\E\Util::parte_float($produto->valor)}}</div>
                    <div class="b-preco-info">ao mês</br>por linha</div>
                </div>
            </div>
        </div>

        <div class="b-vantagens">
            <ul>
                @foreach($produto->adicionais as $add)
                    @if($add == 'GESTOR')
                        <li><i class="fa fa-file-alt"></i> Gestor online 3.0</li> @endif
                    @if($add == 'SMS')
                        <li><i class="fa fa-comments"></i> SMS a vontade para qualquer operadora</li> @endif
                    @if($add == 'SEM_EXCEDENTES')
                        <li><i class="fa fa-download"></i> Sem excedente de dados</li> @endif
                    @if($add == 'PASSAPORTE')
                        <li><i class="fa fa-plane"></i> Passaporte América</li> @endif
                    @if($add == 'EUROPA')
                        <li><i class="fa fa-plane"></i> Passaporte América - Europa Incluso</li> @endif
                @endforeach
            </ul>
        </div>

    </div>

</div>