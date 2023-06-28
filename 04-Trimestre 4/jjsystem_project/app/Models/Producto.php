<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function proveedorProducto(){
        return $this->belongsTo(proveedorProducto::class, 'idProveedorProducto', 'id');
    }

    public function categoriaProducto(){
        return $this->belongsTo(categoriaProducto::class, 'idCategoriaProducto', 'id');
    }

    public function administrador(){
        return $this->belongsTo(administrador::class, 'idAdministrador', 'id');
    }

    public function cotizacion(){
        return $this->belongsTo(cotizacion::class, 'idcotizacion', 'id');
    }
}
