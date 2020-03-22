<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuariosDatos['usuarios']=Usuarios::paginate(5);
        return view('usuarios.index',$usuariosDatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //$datosUsuarios=request()->all();
      $datosUsuarios=request()->except('_token');
     Usuarios::insert($datosUsuarios);
     $usuariosDatos['usuarios']=Usuarios::paginate(5);
     return view('usuarios.index',$usuariosDatos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=Usuarios::findOrFail($id);
        return view('usuarios.editar',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuarios=request()->except(['_token','_method']);
        Usuarios::where('id','=',$id)->update($datosUsuarios);
        Usuarios::insert($datosUsuarios);
        $usuario=Usuarios::findOrFail($id);
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuarios::destroy($id);
        return redirect('usuarios');
    }
}
