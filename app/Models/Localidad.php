<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Localidad extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['localidad'];
    public function eventos()
    {
        return $this->hasMany(Evento::class, 'idlocalidad');
    }
    
}