<?php

namespace App\Http\Controllers;

use App\Models\Collaborators;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CollaboratorReportController extends Controller
{
    public function colaboradores()
    {
        $CollaboratorReportController = Collaborators::with(['unidade', 'cargo'])->get();

        $pdf = Pdf::loadView('CollaboratorReport', compact('CollaboratorReport'));
        return $pdf->download('CollaboratorReport.pdf');
    }
}
