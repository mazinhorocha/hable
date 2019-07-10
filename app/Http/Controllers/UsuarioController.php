<?php 

namespace App\Http\Controllers;

use App\Usuario;
use App\Indicacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class UsuarioController extends Controller {

    public function __construct() {

    }

    public function create(Request $request) {

        $validator = Validator::make($request->all(), [
            'nome'   => 'required',
            'cpf'    => 'required',
            'fone'   => 'required',
            'senha'  => 'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json('Dados incompletos!',400);
        }

        $indicador          = new Usuario();
        $indicador->nome    = $request->input('nome');
        $indicador->cpf     = $request->input('cpf');
        $indicador->fone    = $request->input('fone');
        $indicador->senha   = Hash::make($request->input('senha'));
        $indicador->save();

        return response()->json('Cadastro realizado com sucesso!', 200);

    }

    public function todasIndicacoes(Request $request) {
        $validator = Validator::make($request->all(), [
            'cpf'    => 'required',
            'senha'  => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json('Dados incompletos!', 400);
        }

        $indicador = Usuario::where('cpf', $request->input('cpf'))->first();

        if($indicador != null){

            if(Hash::check($request->input('senha'), $indicador->senha)) {

                $indicacoes = Usuario::where('cpf_indicador', $indicador->cpf)->get();

                if($indicacoes != null){
                    return response()->json($indicacoes, 200);
                }else{
                    return response()->json('Não há indicações cadastradas para esse CPF!', 200);
                }

            } else {
                return response()->json('Acesso não autorizado!', 400);
            }

        }else{
            return response()->json('Usuário não encontrado!',400);
        }

    }
   
}