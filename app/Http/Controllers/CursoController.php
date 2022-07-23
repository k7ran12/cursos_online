<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use App\Models\Curso;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::with('categoria')->paginate(10);
        return view('curso.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carpeta = uniqid();
        Storage::disk('public')->makeDirectory($carpeta);
        $curso = Curso::create([
            'nombre_cursos' => $request->nombre_cursos,
            'nombre_instructor' => $request->nombre_instructor,
            'carpeta' => $carpeta,
            'categoria_id' => $request->categoria_id,
            'imagen'=> $request->imagen
        ]);

        if($curso){
            return redirect()->route('curso.index')->with(['mensaje' => 'Guardado correctamente']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function curso_bloque($id){
        //$videos = [];
        $bloques = Bloque::where('curso_id', $id)->get();
        return view('video.index', compact('bloques'));
    }
}
