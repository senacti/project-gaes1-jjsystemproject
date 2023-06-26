<?php

namespace App\Exports;

use App\Models\Envio;
use Maatwebsite\Excel\Concerns\FromCollection;

class EnviosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Envio::all();
    }
}
