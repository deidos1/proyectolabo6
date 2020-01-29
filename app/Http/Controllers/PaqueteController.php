<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Guia;
use App\Idioma;
use Illuminate\Http\Request;

class PaqueteController extends Controller
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
            $paquetes = Paquete::orderBy('id', 'DESC')
                        ->where('nombre','like','%'.$buscar.'%')
                        ->paginate(5);

            $guias = Guia::All();

            return view('paquetes.index', compact('paquetes','buscar','guias'));
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
        $paquete = Paquete::create($request->All());
        $paquete->save();
        return redirect()->route('paquetes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function show(Paquete $paquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function edit(Paquete $paquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Recuperamos todo el objeto en la BD
        $paquete = Paquete::find($id);
        $paquete->nombre = $request->nombre;
        $paquete->hora_salida = $request->hora_salida;
        $paquete->hora_llegada = $request->hora_llegada;
        $paquete->id_guia = $request->id_guia;
        $paquete->save();
        return redirect()->route('paquetes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paquete $paquete)
    {
        Paquete::find($paquete->id)->delete();
        return back();
    }
}
