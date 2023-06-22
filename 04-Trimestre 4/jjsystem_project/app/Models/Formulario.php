<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $table = 'pqrsf';
    protected $primaryKey = 'idPQRSF';
    protected $fillable = [
        'idPQRSF',
        'fechaPQRSF',
        'informacionPQRSF',
        'Cliente_idCliente',
        'TipoPQRSF_idTipoPQRSF',
        'EstadoPQRSF_idEstadoPQRSF',    
    ];
}
