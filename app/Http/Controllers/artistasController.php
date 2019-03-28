<?php

namespace App\Http\Controllers;
use App\artistas;
use DB;
use Exception;
use Illuminate\Http\Request;

class artistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = artistas::select('id', 'Nombre','Apellidos','Genero')->orderBy('id', 'ASC')->get();
        
        return view('artistas',array('artistas'=>$artistas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   

        
        
        $artista = new artistas;
        $artista->Nombre = $request->input('nombre');
        $artista->Apellidos = $request->input('apellidos');
        $artista->Genero = $request->input('genero');
        $artista->save();
        $artistas = artistas::select('id', 'Nombre','Apellidos','Genero')->orderBy('id', 'ASC')->get();
        return view('artistas',array('artistas'=>$artistas));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
        return view('insertarArtista');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
