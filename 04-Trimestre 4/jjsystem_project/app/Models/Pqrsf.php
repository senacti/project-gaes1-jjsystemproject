<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrsf extends Model
{
    public $timestamps = false;
    protected $table = 'Pqrsf';
    protected $primaryKey = 'idPQRSF  ';

    public function tipoPqrsf()
    {
        return $this->belongsTo(TipoPQRSF::class, 'TipoPQRSF_idTipoPQRSF');
    }
}
