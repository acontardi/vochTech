<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positionemployee extends Model
{
    use HasFactory;

    protected $fillable = ['colaborador_id', 'cargo_id', 'nota_desempenho'];

    public function Collaborators()
    {
        return $this->belongsTo(Collaborators::class);
    }

}
