<?php

namespace App\Http\Controllers;

use App\Models\units;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TotalEmployeeperUnit extends Controller
{
    public function TotalEmployeeperUnit()
{
    $units = units::withCount('colaboradores')->get();

    $pdf = Pdf::loadView('TotalEmployeeperUnit', compact('units'));
    return $pdf->download('TotalEmployeeperUnit.pdf');
}
}
