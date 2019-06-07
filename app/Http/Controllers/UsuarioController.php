<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario_listar', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario_cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new Usuario();
        $usuarios->nome = $request->input("nome");
        $usuarios->sexo = $request->input("sexo");
        $usuarios->data = $request->input("data");
        $usuarios->email = $request->input("email");
        $usuarios->telefone = $request->input("telefone");
        $usuarios->login = $request->input("login");
        $usuarios->senha = $request->input("senha");
        $usuarios->save();
        return redirect()->route('usuario.index');
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
    public function edit(Usuario $usuarios)
    {
        return view('usuario_editar',compact('usuarios'));
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
        $usuarios = Usuario::find($id);
        $usuarios->nome = $request->input("nome");
        $usuarios->sexo = $request->input("sexo");
        $usuarios->data = $request->input("data");
        $usuarios->email = $request->input("email");
        $usuarios->telefone = $request->input("telefone");
        $usuarios->login = $request->input("login");
        $usuarios->senha = $request->input("senha");
        $usuarios->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = Usuario::find($id);
        $usuarios->delete();
        return redirect()->route('usuario.index');
    }
}
