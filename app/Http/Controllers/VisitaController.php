<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Visita;
use Validator;

class VisitaController extends Controller {

    public function __construct() {

    }

    public function create(Request $request) {

        $validator = Validator::make($request->all(), [
            'data'   => 'required'
            
        ]);
        
        if ($validator->fails()) {
            return response()->json('Dados incompletos!',400);
        }

        $visita                = new Visita();
        $visita->data          = $request->input('data');
        $visita->lat           = $request->input('lat');
        $visita->lon           = $request->input('lon');
        $visita->condominio_id = $request->input('condominio_id');
        $visita->usuario_id    = $request->input('usuario_id');

        $visita->save();

        return response()->json('Cadastro realizado com sucesso!', 200);

    }
   
}