<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    public $timestamps = false;
    protected $table = 'envios';
    protected $primaryKey = 'idEnvio';

    public function estadoEnvio()
    {
        return $this->belongsTo(EstadoEnvio::class, 'EstadoEnvio_idEstadoEnvio');
    }
}
