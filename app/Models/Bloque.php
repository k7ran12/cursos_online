<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_bloque', 'carpeta', 'curso_id'];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
