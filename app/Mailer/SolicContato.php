<?php

namespace App\Mailer;

use Illuminate\Mail\Mailable;

class SolicContato extends Mailable
{

    private $dados;

    public function __construct($dados = [])
    {
        $this->dados = $dados;
    }

    public function build()
    {
        return
            $this->from('campanhas@grupohable.com.br', 'Campanhas Grupo Hable' )
                 ->cc('tharles.andrade@grupohable.com.br')
                 ->subject('EVERDAY - NOVO LEAD - CLARO EMPRESAS')
                 ->view('empresarialclaro-com-br.layout.email.solic-contato')
                 ->with($this->dados);
    }
}