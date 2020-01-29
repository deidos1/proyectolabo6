<?php

namespace App\Http\Controllers;

use App\Guia;
use App\Idioma;
use Illuminate\Http\Request;

class GuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $buscar = $request->get('buscar');
            $guias = Guia::orderBy('id', 'DESC')
                        ->where('nombre','like','%'.$buscar.'%')
                        ->paginate(5);

            $idiomas = Idioma::All();

            return view('guias.index', compact('idiomas','buscar', 'guias'));
        }
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
        /*$this->validate($request,[
          'nombre'=>'required',
          'documento_identidad'=>'required',
          'genero'=>'required',
          'direcion'=>'required',
          'email'=>'required',
          'id_idioma'=>'required'
        ]);*/
        $guia = Guia::create($request->All());
        $guia->save();
        return redirect()->route('guias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function show(Guia $guia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function edit(Guia $guia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Recuperamos todo el objeto en la BD
        $guia = Guia::find($id);
        $guia->nombre = $request->nombre;
        $guia->documento_identidad = $request->documento_identidad;
        $guia->genero = $request->genero;
        $guia->direccion = $request->direccion;
        $guia->email = $request->email;
        $guia->id_idioma = $request->id_idioma;
        $guia->save();
        return redirect()->route('guias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guia  $guia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guia $guia)
    {
        Guia::find($guia->id)->delete();
        return back();
    }
}
