<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){

        $contatos = [
            (object)["nome"=>"Maria", "tel"=>"65875468"],
            (object)["nome"=>"Pedro", "tel"=>"48578565"]
        ];

        $contato = new Contato();
        $con = $contato->lista();

        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){
        dd($req->all());
        return "Esse é o Criar do ContatoController";
    }

    public function editar(){
        return "Esse é o Editar do ContatoController";
    }
}
