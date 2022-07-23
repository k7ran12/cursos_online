<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BloqueController extends Controller
{
    public function index($id)
    {
        $curso_bloque = Bloque::where('curso_id', $id)->get();
        return view('bloque.index', compact('curso_bloque'));
    }
    public function create($id)
    {
        return view('bloque.create');
    }

    public function store(Request $request)
    {
        $curso = Curso::find($request->curso_id);
        Storage::disk('public')->makeDirectory($curso->carpeta.'/'.$request->nombre_bloque);
        Bloque::create($request->all());
        return redirect()->route('bloque.index',$request->curso_id)->with(['mensaje' => 'Video subido correctamente']);
    }
}
