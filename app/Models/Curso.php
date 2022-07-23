<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_cursos', 'nombre_instructor', 'carpeta', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function bloque(){
        return $this->hasMany(Bloque::class);
    }
}
