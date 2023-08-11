<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Positionemployee;
use App\Models\Collaborators;
use App\Models\positions;

class PositionemployeeController extends Controller
{
    public function create()
    {
        $colaboradores = Collaborators::all();
        return view('Positionemployee.create', compact('Collaborators'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'colaborador_id' => 'required|exists:collaborators,id',
            'cargo_id' => 'required|exists:position,id',
            'nota_desempenho' => 'required|integer|min:0|max:10',
        ]);

        Positionemployee::create([
            'colaborador_id' => $request->colaborador_id,
            'cargo_id' => $request->cargo_ai,
            'nota_desempenho' => $request->nota,
        ]);

        return redirect()->route('collaborators.index')->with('success', 'Nota registrada com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'colaborador_id' => 'required|exists:collaborators,id',
            'cargo_id' => 'required|exists:position,id',
            'nota_desempenho' => 'required|integer|min:0|max:10',
        ]);

        $desempenho = Positionemployee::findOrFail($id);
        $desempenho->update([
            'colaborador_id' => $request->colaborador_id,
            'cargo_id' => $request->cargo_ai,
            'nota_desempenho' => $request->nota,
        ]);

        return redirect()->route('collaborators.index')->with('success', 'Nota atualizada com sucesso!');
    }
}
