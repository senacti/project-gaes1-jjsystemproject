<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrsf extends Model
{
    public $timestamps = false;
    protected $table = 'pqrsf';
    protected $primaryKey = 'idPQRSF';

    public function estadoPQRSF()
    {
        return $this->belongsTo(estadoPQRSF::class, 'idEstadoPQRSF', 'id');
    }

    public function tipoPQRSF()
    {
        return $this->belongsTo(TipoPQRSF::class, 'TipoPQRSF_idTipoPQRSF');
    }

}
