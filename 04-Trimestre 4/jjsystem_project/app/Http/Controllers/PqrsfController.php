<?php

namespace App\Http\Controllers;

use App\Models\Pqrsf;
use App\Models\TipoPQRSF;
use Illuminate\Http\Request;

class PqrsfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pqrsf = Pqrsf::all();
        return view('pqrsf.index', ['pqrsf' => $pqrsf]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = TipoPQRSF::all();
        return view('pqrsf.create', ['tipos' => $tipos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fechaPQRSF' => 'required',
            'tipoPQRSF' => 'required',
            'informacionPQRSF' => 'required', 
        ]); 

        $pqrsf = new Pqrsf();
        $pqrsf->fechaPQRSF = $request->input('fechaPQRSF');
        $pqrsf->tipoPQRSF_idTipoPqrsf = $request->input('tipoPQRSF');
        $pqrsf->informacionPQRSF = $request->input('informacionPQRSF');
        $pqrsf->save();

        return view("pqrsf.message", ['msg' => "Registro guardado"]);
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
        $pqrsf = Pqrsf::find($idPQRSF);
        return view('Pqrsf.edit', ['pqrsf' => $pqrsf, 'tipos' => TipoPQRSF::all()]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idPQRSF)
    {
        $request->validate([
            'fechaPQRSF' => 'required',
            'tipoPQRSF' => 'required',
            'informacionPQRSF' => 'required', 
        ]); 

        $pqrsf = Pqrsf::find($idPQRSF);
        $pqrsf->fechaPQRSF = $request->input('fechaPQRSF');
        $pqrsf->tipoPQRSF_idTipoPqrsf = $request->input('tipoPQRSF');
        $pqrsf->informacionPQRSF = $request->input('informacionPQRSF');
        $pqrsf->save();

        return view("pqrsf.message", ['msg' => "Registro modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idPQRSF)
    {
        $pqrsf = Pqrsf::find($idPQRSF);
        $pqrsf->delete();

        return redirect("pqrsf");
    }
}
