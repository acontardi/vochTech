@extends('layouts.app') {{-- Supondo que você tenha um layout padrão --}}

@section('content')
    <div class="container">
        <h2>{{ isset($Positionemployee) ? 'Editar' : 'Criar' }} Nota de Desempenho</h2>
        <form action="{{ isset($Positionemployee) ? route('Positionemployee.update', $Positionemployee->id) : route('Positionemployee.store') }}" method="POST">
            @csrf
            @if(isset($Positionemployee))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="colaborador_id">Colaborador:</label>
                <select class="form-control" id="colaborador_id" name="colaborador_id" required>
                    @foreach($Collaborators as $Collaborators)
                        <option value="{{ $Collaborators->id }}" {{ isset($Positionemployee) && $Positionemployee->colaborador_id == $Collaborators->id ? 'selected' : '' }}>
                            {{ $Collaborators->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nota">Nota:</label>
                <input type="number" class="form-control" id="nota" name="nota" required min="0" max="10" value="{{ isset($Positionemployee) ? $Positionemployee->nota : old('nota') }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($Positionemployee) ? 'Atualizar' : 'Salvar' }}</button>
        </form>
    </div>
@endsection