<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\EnviosExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export()
    {
        return Excel::download(new EnviosExport, 'envios.xlsx', \Maatwebsite\Excel\Excel::XLSX);    
    }
}
