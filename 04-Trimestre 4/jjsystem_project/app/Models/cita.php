<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    public $timestamps = false;
    protected $table='citas';
    protected $primaryKey='idCita';
    protected $fillable=['fechaCita','direccion','contactoCliente','descripcionCita'];

    public function Tecnicos()
    {
        return this->belongsTo(tecnicos::class,'idTecnico');
    }

    public function Administrador()
    {
        return this->belongsTo(administrador::class,'idAdministrador');
    }
    public function Cotizacion()
    {
        return this->belongsTo(cotizacion::class,'idCotizacion');
    }
    public function EstadoCita()
    {
        return this->belongsTo(estadoCita::class,'idEstadoCita');
    }
}
