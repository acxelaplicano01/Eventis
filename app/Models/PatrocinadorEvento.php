<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatrocinadorEvento extends Model
{
    use HasFactory;
    protected $table = 'patrocinador_evento';

    
    protected $fillable = ['evento_id', 'patrocinador_id', 'cantidad_invitados'];

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }

    public function patrocinador()
    {
        return $this->belongsTo(Patrocinador::class, 'id_patrocinador');
    }
}
