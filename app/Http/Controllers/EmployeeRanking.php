<?php

namespace App\Http\Controllers;

use App\Models\Collaborators;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class EmployeeRanking extends Controller
{
    public function EmployeeRanking()
    {
        $colaboradores = Collaborators::with(['unidade', 'cargo', 'desempenhos'])
            ->orderByDesc('nota')
            ->get();

        $pdf = Pdf::loadView('EmployeeRanking', compact('colaboradores'));
        return $pdf->download('EmployeeRanking.pdf');
    }
}
