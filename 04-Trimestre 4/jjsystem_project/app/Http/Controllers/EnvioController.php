<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use App\Models\EstadoEnvio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnvioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $envios = Envio::with('EstadoEnvio')->get(); 
        return view ('Envios.Index', ['envios' => $envios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estados = EstadoEnvio::all();
        return view("Envios.Create", ['estados' => $estados]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'direccion' => 'required',
            'idtecnico' => 'required',
            'estado' => 'required',
        ]);

        $envio = new Envio();
        $envio->direccion = $request->input('direccion');
        $envio->idTecnico = $request->input('idtecnico');
        $envio->EstadoEnvio_idEstadoEnvio = $request->input('estado');
        $envio->save();

        return view("Envios.Mensaje", ['msg'=> "Registro Guardado"]);                                                     
    }

    /**
     * Display the specified resource.
     */
    public function show(Envio $envio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idEnvio)
    {
        $envio = Envio::find($idEnvio);
        return view('Envios.Edit', ['envio' => $envio, 'estados' => EstadoEnvio::All()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idEnvio)
    {
        $request->validate([
            'direccion' => 'required',
            'idtecnico' => 'required',
            'estado' => 'required',
        ]);

        $envio = Envio::find($idEnvio);
        $envio->direccion = $request->input('direccion');
        $envio->idTecnico = $request->input('idtecnico');
        $envio->EstadoEnvio_idEstadoEnvio = $request->input('estado');
        $envio->save();

        return view("Envios.Mensaje", ['msg'=> "Registro Guardado"]);   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idEnvio)
    {
        $envio = Envio::find($idEnvio);
        $envio->delete();

        return redirect("envios");
    }
}
