<?php 

namespace App\Http\Controllers;

use App\Indicacao;
use App\Indicador;
use Illuminate\Http\Request;
use Validator;

class IndicacaoController extends Controller {

    public function __construct() {
    
    }

    public function create(Request $request) {

        $validator = Validator::make($request->all(), [
            'nome'           => 'required',
            'fone1'          => 'required',
            'cpf_indicador'  => 'required'
        ]);

        if ($validator->fails($request->all())) {
            return response()->json('Dados incompletos!', 400);
        }

        $indicador = Indicador::where('cpf', $request->input('cpf_indicador'))->first();

        if($indicador){
            //continua
        }else{
            return response()->json('Vocẽ não possui cadastro do Indique e ganhe!', 400);
        }

        $indicacao                = new Indicacao();
        $indicacao->nome          = $request->input('nome');
        $indicacao->cpf           = $request->input('cpf');
        $indicacao->fone1         = $request->input('fone1');
        $indicacao->fone2         = $request->input('fone2');
        $indicacao->obs           = $request->input('obs');
        $indicacao->cpf_indicador = $request->input('cpf_indicador');

        $indicacao->save();

        return response()->json($indicacao, 200);

    }
   
}