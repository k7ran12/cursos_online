<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\Video;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function index()
    {
        $cursos = Curso::with('categoria')->paginate(8);
        $categorias = Categoria::all();
        return view('stream.index', compact('cursos','categorias'));
    }

    public function list($id)
    {
        //$videos = Video::where('curso_id',$id);
        //$videos = Curso::with('bloque', 'categoria')->where('id',$id)->get();

        $videos = Curso::with(['bloque' => function ($query) {
            $query->with('videos')
                  ->get();
        }],'categoria')->where('id', $id)->get();


        return view('stream.list', compact('videos'));
    }

    public function categoria($id)
    {
        $cursos = Curso::with('categoria')->where('categoria_id',$id)->paginate(8);
        $categorias = Categoria::all();
        return view('stream.index', compact('cursos','categorias'));
    }

    public function search(Request $request)
    {
        $categorias = Categoria::all();
        $cursos = Curso::where('nombre_cursos', 'LIKE', "%" . $request->search . "%")->paginate(8);
        return view('stream.index', compact('cursos', 'categorias'));
    }
}
