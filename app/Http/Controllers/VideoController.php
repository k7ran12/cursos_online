<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use App\Models\Curso;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin','permission:curso']);
    }
    public function index($bloque_id)
    {
        $videos = Bloque::with('videos');
        return view('video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_curso, $id_bloque)
    {
        $misdoc = $request->file('file');
        //$nombre_hash = $request->file('file')->store('public');


        $curso = Curso::find($request->curso_id);
        $bloque = Bloque::find($request->id_bloque);
        $save_file = $curso->carpeta.'/'.$bloque->nombre_bloque;

        foreach ($misdoc as $qdoc => $eldocu) {

            //Storage::disk('otroftp')->put('/carpeta', $eldocu);

            Storage::disk('public')->putFileAs($save_file, $eldocu, $eldocu->getClientOriginalName());

            $getID3 = new \getID3;
            $file = $getID3->analyze($eldocu);
            //$duration = date('H:i:s.v', $file['playtime_string']);

            Video::create([
                'nombre_video' => $eldocu->getClientOriginalName(),
                'tiempo' => $file['playtime_string'],
                'bloque_id' => $request->id_bloque
            ]);
        }

        return redirect()->route('bloque.index',$curso->id)->with(['mensaje' => 'Video subido correctamente']);
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

    public function crear($id)
    {
        return view('video.create');
    }

    public function video_lista($id,$id_bloque)
    {
        //echo $id . " " . $id_bloque;
        //$videos = Bloque::with('videos')->where('curso_id', $id)->get();
        //$bloques = Bloque::where('id',$id_bloque)->with('videos')->get();
        $videos = Video::where('bloque_id', $id_bloque)->get();
        return view('video.index', compact('videos'));
        //return $videos;
    }
}
