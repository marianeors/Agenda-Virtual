<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContatosAgendaController extends Controller
{
    public function index(Request $request)
    {
        $contatos = Contatos::all();
        
        return view('welcome');
    }
    public function indexContatos()
    {
        $contatos = Contatos::all();

        return view('contatos.index')->with('contatos', $contatos);
    }

    public function create()
    {
        return view('contatos.create');
    }

    public function store(Request $request) {

        $contatos = new Contatos;

        $contatos->nome = $request->nome;
        $contatos->email = $request->email;
        $contatos->telefone = $request->telefone;
     

        $contatos->save();

        return redirect('/contatos');

    }

    public function show($id) {

        $contatos = Contatos::findOrFail($id);

        return view('contatos.index', ['contatos' => $contatos]);
        
    }

}
