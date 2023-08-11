<?php

namespace App\Http\Controllers;

use App\Models\units;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class UnitsController extends Controller
{
    public function index()
    {
        $units = units::all();
        return view('units.index', compact('units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_fantasia' => 'required|max:255',
            'razao_social' => 'required|max:255',
            'cnpj' => 'required|regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/',
    ]);

        Units::create([
            'nome_fantasia' => $request->nome_fantasia,
            'razao_social' => $request->razao_social,
            'cnpj' => $request->cnpj,
    ]);

        return redirect()->route('units.index')->with('success', 'Unidade criada com sucesso!');
    }

}
