<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Video;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function index()
    {
        $cursos = Curso::with('categoria')->get();
        return view('stream.index', compact('cursos'));
    }

    public function list($id)
    {
        //$videos = Video::where('curso_id',$id);
        $videos = Curso::with('videos', 'categoria')->where('id',$id)->get();
        return view('stream.list', compact('videos'));
    }
}
