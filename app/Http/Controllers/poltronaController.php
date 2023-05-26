<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Poltrona;


class poltronaController extends Controller
{

    public function buscarCadastroPoltrona(){
        return View('cadastroPoltrona');
    }


    public function cadastrarPoltrona(Request $request){
        $dadospoltrona = $request->validate(
            [
                'id'=> 'string|required',
                'nomeclie'=> 'string|required'
            ]
            );

        Poltrona::create($dadospoltrona);
        return Redirect::route('cadastro-poltrona');
    }


    public function MostrarGerenciadorPoltrona(Request $request){
        $dadospoltrona = Poltrona::all();
       // dd($dadosfuncionarios);

        $dadospoltrona = Poltrona::query();
        $dadospoltrona->when($request->id,function($query,$idcliente ){
            $query->where('id','=', $idcliente);
        }); 

        $dadospoltrona = $dadospoltrona->get();

        return view('gerenciadorPoltrona',['dadospoltrona'=>$dadospoltrona]);

    }



    public function ApagarPoltrona(Poltrona $registrosPoltronas){
        $registrosPoltronas->delete();

           return Redirect::route('gerenciar-poltrona');
        }


        public function MostrarRegistrosPoltrona(Poltrona $registrosPoltronas){
            return view('xxxx',['registrosPoltronas'=>$registrosPoltronas]);

        }


        public function AlterarBancoPoltrona(Poltrona  $registrosPoltronas, Request $request){
            $dadospoltrona = $request->validate([
                'id' => 'string|required',
                'nomeclie' => 'string|required'

            ]);

        $registrosPoltronas->fill($dadospoltrona);
        $registrosPoltronas->save();

        return Redirect::route('gerenciar-poltrona');


}





}
?>