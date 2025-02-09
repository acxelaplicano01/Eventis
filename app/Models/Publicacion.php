<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Publicacion extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['IdUsuario','descripcion','foto', 'fecha','hora','lugar'];

    public function user()
    {
        return $this->belongsTo(User::class, 'IdUsuario ');
    }

}
