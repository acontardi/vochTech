<?php

namespace App\Http\Controllers;

use App\Models\Collaborators;
use Illuminate\Http\Request;

class CollaboratorsController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'cargo_id' => 'required|exists:positions,id',
            'unidade_id' => 'required|exists:units,id',
            'cpf' => 'required|unique:colaboradores,cpf|cpf',
            'email' => 'required|email|unique:colaboradores,email',
        ]);

        Collaborators::create([
            'nome' => $request->nome,
            'cargo_id' => $request->cargo_id,
            'unidade_id' => $request->unidade_id,
            'cpj' => $request->cnpj,
            'email' => $request->email,
        ]);

        return redirect()->route('colaboradores.index')->with('success', 'Colaborador criado com sucesso!');
    }
}
