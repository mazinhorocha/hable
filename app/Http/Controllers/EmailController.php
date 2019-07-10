<?php 

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use Validator;

class EmailController extends Controller {

    public function __construct() {
    
    }

    public function store(Request $request) {
       
        $response = ['e-mail enviado com sucesso!'];
        
        $validator = Validator::make($request->all(), [
            'nome'   => 'required',
            'numero' => 'required',
            'email'  => 'required'
        ]);
        
        if ($validator->fails()) {
            return response('Dados Incompletos!');
        }

        $email             = new Email();
        $email->nome       = $request->input('nome');
        $email->numero     = $request->input('numero');
        $email->email      = $request->input('email');
        $email->data_envio = \Carbon\Carbon::now()->timezone('America/Sao_Paulo');
        $email->status     = 0;
        $email->save();

        return response('sucesso');

    }
   
}