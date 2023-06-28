<?php

namespace App\Http\Controllers;

use App\Models\estadoPQRSF;
use App\Models\Pqrsf;
use App\Models\TipoPQRSF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PqrsfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pqrsf = Pqrsf::all(); 
        //$tipos = TipoPQRSF::all();
        $tipos = TipoPQRSF::pluck('nombreTipoPQRSF', 'idTipoPQRSF')->all();
        return view('Pqrsf.create', compact('tipos', 'pqrsf'));

       // $tipos = DB::select('SELECT * FROM estadoPQRSF');
      //  $estados = DB::select('SELECT * FROM TipoPQRSF');
      //  return view('Pqrsf/create', compact('tipos', 'estados', 'pqrsf'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pqrsfs = Pqrsf::all(); 
        $tipos = TipoPQRSF::all();
        $estados = estadoPQRSF::all();

        return view('Pqrsf.create', compact('tipos', 'estados', 'pqrsfs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'fechaPQRSF' => 'required',
            'informacionPQRSF' => 'required',
            'TipoPQRSF_idTipoPQRSF' => 'required'
        ]);

        $pqrsf = new Pqrsf();
        $pqrsf ->fechaPQRSF = $request->input('fechaPQRSF');
        $pqrsf ->informacionPQRSF = $request->input('informacionPQRSF');
        $pqrsf->TipoPQRSF_idTipoPQRSF = $request->input('TipoPQRSF_idTipoPQRSF');     
        $pqrsf ->save();
        
        return view("Pqrsf.message", [ 'msg' => "Registro guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pqrsf $pqrsf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idPQRSF)
    {
        $Pqrsf = Pqrsf::find($idPQRSF);
        return view('Pqrsf.edit', ['Pqrsf' => $Pqrsf, 'estados' => estadoPQRSF::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idPQRSF)
    {
        $request->validate([
            
            'fechaPQRSF' => 'required',
            'informacionPQRSF' => 'required',
            'idCliente' => 'required',
            'TipoPQRSF_idTipoPQRSF' => 'required',
            'EstadoPQRSF_idEstadoPQRSF' => 'required'
        ]);

        $pqrsf = Pqrsf::find($idPQRSF);
        $pqrsf ->fechaPQRSF = $request->input('fechaPQRSF');
        $pqrsf ->informacionPQRSF = $request->input('informacionPQRSF');
        $pqrsf ->Cliente_idCliente = $request->input('Cliente_idCliente');
        $pqrsf ->TipoPQRSF_idTipoPQRSF = $request->input('TipoPQRSF');
        $pqrsf ->EstadoPQRSF_idEstadoPQRSF = $request->input('estadoPQRSF');
        $pqrsf ->save();

        return view("Pqrsf.message", [ 'msg' => "Registro editado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idPQRSF)
    {
        $Pqrsf = Pqrsf::find($idPQRSF);
        $Pqrsf->delete();

        return redirect("Pqrsf");    
    }
}
