<?php

namespace App\Http\Controllers;

use App\Reserva;
use App\Paquete;
use App\Guia;
use App\Idioma;
use App\Cliente;
use App\User;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request){
            $buscar = $request->get('buscar');
            $reservas = Reserva::orderBy('id', 'DESC')
                        ->where('fecha_reserva','like','%'.$buscar.'%')
                        ->paginate(5);

            $paquetes = Paquete::All();
            $clientes = Cliente::All();
            $guias = Guia::All();
            $users = User::All();

            return view('reservas.index', compact('reservas','buscar', 'guias', 'clientes', 'paquetes', 'users'));
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
        $reserva = Reserva::create($request->All());

        $reserva->save();
        return redirect()->route('reservas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Recuperamos todo el objeto en la BD
        $reserva = Reserva::find($id);
        $reserva->fecha_reserva = $request->fecha_reserva;
        $reserva->user_id = $request->user_id;
        $reserva->id_paquete = $request->id_paquete;
        $reserva->id_cliente = $request->id_cliente;
        $reserva->save();
        return redirect()->route('paquetes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        Reserva::find($reserva->id)->delete();
        return back();
    }
}
