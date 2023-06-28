<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\cita;
use App\Models\idTecnico;
use Illuminate\Http\Request;


class citaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Citas.indexST');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pdf(){
        $citas=cita::all();
        $pdf = Pdf::loadView('citas.pdf', compact('Citas'));
        return $pdf->stream();
    }
    public function create()
    {
        $citas = cita::all();
        return view('Citas.createAnalisis',['citas'=>$citas]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fechaCita'=>'required',
            'direccion'=>'required',
            'contactoCliente'=>'required',
            'descripcionCita'=>'required',
            'idTecnico'=>'nullable',
        ]);

        $cita =new cita();
        $cita->fechaCita=$request->input('fechaCita');
        $cita->direccion=$request->input('direccion');
        $cita->contactoCliente=$request->input('contactoCliente');
        $cita->descripcionCita=$request->input('descripcionCita');
        $cita->idTecnico=$request->input('idTecnico');
        $cita->save();

        return view("citas.message",['msg'=>"Cita agendada"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idCita)
    {
        $cita= cita::find($idCita);
        $citas= cita::all();
        return view('Citas.editAnalisis',['cita'=>$cita, 'citas'=>$citas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idCita)
    {
        $request->validate([
            'fechaCita'=>'required',
            'direccion'=>'required',
            'contactoCliente'=>'required',
            'descripcionCita'=>'required',
            'idTecnico'=>'nullable',
        ]);

        $cita = cita::find($idCita);
        $cita->fechaCita=$request->input('fechaCita');
        $cita->direccion=$request->input('direccion');
        $cita->contactoCliente=$request->input('contactoCliente');
        $cita->descripcionCita=$request->input('descripcionCita');
        $cita->idTecnico=$request->input('idTecnico');
        $cita->save();

        return view("citas.message",['msg'=>"Cita modificada"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idCita)
    {
        $citas = cita::find($idCita);
        $citas->delete();

        return redirect("Citas");
    }
}
