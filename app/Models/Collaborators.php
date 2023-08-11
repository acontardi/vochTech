<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborators extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cargo_id', 'unidade_id', 'cpf', 'email'];

    public function positions()
    {
        return $this->belongsTo(positions::class);
    }

    public function units()
    {
        return $this->belongsTo(units::class);
    }
}
