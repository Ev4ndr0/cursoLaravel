<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index',compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    /**
     * Metodo para salvar os dados
     */

    public function salvar(Request $req)
    {
        $dados = $req->all();
        dd($dados);
    }

}