<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\proveedorProducto;
use App\Models\categoriaProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Productos = Producto::all();
        return view('Productos.indexProductos', ['Productos' => $Productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoriaProductos = categoriaProducto::all();
        $proveedorProductos = proveedorProducto::all();
        
        return view('Productos.create', [
            'categoriaProductos' => $categoriaProductos,
            'proveedorProductos' => $proveedorProductos
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreProducto' => 'required',
            'descripcionProducto' => 'required',
            'precioProducto' => 'nullable',
            'cantidad' => 'required',
            'proveedorProducto' => 'required',
            'categoriaProducto' => 'required',
            
        ]);

        $Producto = new Producto();
        $Producto->nombreProducto = $request->input('nombreProducto');
        $Producto->descripcionProducto = $request->input('descripcionProducto');
        $Producto->precioProducto = $request->input('precioProducto');
        $Producto->cantidad = $request->input('cantidad');
        $Producto->idProveedorProducto = $request->input('proveedorProducto');
        $Producto->idCategoriaProducto= $request->input('categoriaProducto');
        $Producto->save();

        return view("Productos.message", ['msg' => 'Producto guardado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Producto = Producto::find($id);
        return view('Productos.edit', ['Producto' => $Producto, 'categoriaProductos' => categoriaProducto::all(), 'proveedorProductos' => proveedorProducto::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombreProducto' => 'required',
            'descripcionProducto' => 'required',
            'precioProducto' => 'nullable',
            'cantidad' => 'required',
            'proveedorProducto' => 'required',
            'categoriaProducto' => 'required',
            
        ]);

        $Producto = Producto::find($id);
        $Producto->nombreProducto = $request->input('nombreProducto');
        $Producto->descripcionProducto = $request->input('descripcionProducto');
        $Producto->precioProducto = $request->input('precioProducto');
        $Producto->cantidad = $request->input('cantidad');
        $Producto->idProveedorProducto = $request->input('proveedorProducto');
        $Producto->idCategoriaProducto= $request->input('categoriaProducto');
        $Producto->save();

        return view("Productos.message", ['msg' => 'Producto guardado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Producto = Producto::find($id);
        $Producto->delete();

        return redirect("Productos");
    }
}
