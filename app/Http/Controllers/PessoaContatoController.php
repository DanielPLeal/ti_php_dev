<?php

namespace App\Http\Controllers;

use App\PessoaContato;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PessoaContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $contatos = PessoaContato::all();
        $cont = DB::table('pessoa_contatos')->count();
        return view('lista_contato', compact(['contatos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contato = new PessoaContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        if (isset($contato->nome) && isset($contato->telefone)) {
            $contato->save();
            return redirect()->route('lista')->with('success', 'Cadastro realizado com sucesso.');
        }
         return redirect()->route('lista')->with('error', 'Erro ao cadastrar o contato.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contato = PessoaContato::findOrFail($id);
        if (isset($contato)) {
            return view('det_contato',compact(['contato']));
        }
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contato = PessoaContato::findOrFail($id);
        if (isset($contato)) {
            $contato->nome = $request->nome;
            $contato->telefone = $request->telefone;
            $contato->save();
            return redirect()->route('lista')->with('success', 'Contato Alterado com sucesso.');
        }
        return redirect()->route('lista')->with('error', 'Erro ao Alterar o Contato.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contato = PessoaContato::find($id);
        if(isset($contato)){
            $contato->delete();
            return redirect()->route('lista')->with('success', 'Contato Excluido com sucesso.');
        }
        return redirect()->route('lista')->with('error', 'Erro ao Excluir o Contato.');  
    }
}
