<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {

        $contatos = [
            ["nome"=>"Evandro", "tel"=>"992824201"],
            ["nome"=> "Mo", "tel"=>"958334583"]
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        return view('contato.index',compact('contatos'));
    }

    public function criar(Request $req)
    {
        dd($req->all());
        return "Esse é o Criar do ContatoController";
    }

    public function editar()
    {
        return view('contato.index');
    }
}
