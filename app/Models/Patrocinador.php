<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrocinador extends Model
{
    use HasFactory;
    protected $table = 'patrocinadores';
    protected $fillable = ['Foto','descripcion'];
  
    public function eventos()
    {
        return $this->belongsToMany(Evento::class, 'patrocinador_evento')
                    ->withPivot('cantidad_invitados')
                    ->withTimestamps();
    }
    
}
