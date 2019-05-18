<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Tarefa;

class TarefaController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
        
    public function forceDelete($id){
        $tarefas = Tarefa::onlyTrashed()->find($id);
        $tarefas ->forceDelete();
        return redirect()->route('tarefas.restaurar');
    }

    public function restore($id){
        $tarefas = tarefa::onlyTrashed()->find($id);
        $tarefas ->restore();
        return redirect()->route('tarefas.index');
    }

    public function indexTrashed(){
        $tarefas = Tarefa::onlyTrashed()->get();
        return view('tarefas_restaurar', compact('tarefas'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas_listar', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarefas_cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarefas = new Tarefa();
        $tarefas->titulo = $request->input("titulo");
        $tarefas->usuario_responsavel = $request->input('usuario_responsavel');
        $tarefas->privacidade = $request->input('privacidade');
        $tarefas->descricao = $request->input('descricao');
        $tarefas->tipo = $request->input('tipo');
        $tarefas->status = $request->input('status');
        $tarefas->data = $request->input('data');
        $tarefas->save();
        return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarefa  $Tarefas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarefas = Tarefa::find($id);
        return view('nome da view',compact('tarefas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarefa  $tarefas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefas)
    {
        return view('tarefas_editar', compact('tarefas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarefa  $tarefas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefas $tarefas)
    {
        $tarefas->titulo = $request->input("titulo");
        $tarefas->usuario_responsavel = $request->input('usuario_responsavel');
        $tarefas->privacidade = $request->input('privacidade');
        $tarefas->descricao = $request->input('descricao');
        $tarefas->tipo = $request->input('tipo');
        $tarefas->status = $request->input('status');
        $tarefas->data = $request->input('data');
        $tarefas->save();
        return redirect()->route('tarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarefa  $tarefas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefas)
    {
        $tarefas->delete();
        return redirect()->route('tarefas.index');
    }
}
