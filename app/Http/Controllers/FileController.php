<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\HerederosModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class FileController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexf()
    {
        $files = File::all();
        $herederos = HerederosModel::all();
        return view('content/indexf')
            ->with(['herederos' => $herederos])
            ->with(['files' => $files]);
    }

    public function rec_herederos($id) //recuerdos de cada heredero
    {

        // return File::where('id_destinatario', $id)->get();

        return \DB::select('SELECT f.id, f.id_destinatario, d.id_destinatario , d.nombre , d.app, d.apm, f.url
        FROM files f, destinatarios d 
        WHERE f.id_destinatario = d.id_destinatario AND f.id_destinatario = ' . $id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createf()
    {
        $herederos = DB::select('SELECT * FROM destinatarios where user_id = ' . auth()->user()->id);
        
        return view('content/createf')
            ->with(['herederos' => $herederos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storef(Request $request)
    {
        //              Archivos

        /*$request->validate([
            'file' => 'required|file|max:500000|mimes:pdf,docx,doc,txt'
        ]);
        $nombre = Str::random(10) . $request->file('file')->getClientOriginalName(); 
        $ruta = storage_path() . '\app\public\archivos/' . $nombre;
        $archivos = $request->file('file')->store('public/archivos');
        File::create([
            'id_usuario' => session('session_id'),
            'url' => '/storage/archivos/' . $nombre
        ]);*/
        //              Imagenes

        $request->validate([
            'file' => 'required'
        ]);

        $nombre = Str::random(10) . $request->file('file')->getClientOriginalName();
        $ruta = storage_path() . '\app\public\archivos/' . $nombre;
        Image::make($request->file('file'))
            ->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($ruta);
        File::create([
            'user_id' => auth()->user()->id,
            'id_destinatario' => $request->get('heredero'),
            'url' => '/storage/archivos/' . $nombre
        ]);
        $usuario = User::find(auth()->id());

        $int = (int)$usuario->num_i;
        if($int>=1){
        
        $usuario->update(["num_i" => $int-1 ]);}
        else{
            return Redirect::back()->with('message',' Ups !');
        }
    }
    public function storeff(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:500000|mimes:pdf,docx,doc,txt'
        ]);
        $nombre = Str::random(10) . $request->file('file')->getClientOriginalName();
        $ruta = storage_path() . '\app\public\archivos/' . $nombre;
        $archivos = $request->file('file')->store('public/archivos');
        File::create([
            'user_id' => auth()->user()->id,
            'id_destinatario' => $request->get('heredero'),
            'url' => '/storage/archivos/' . $nombre
        ]);
        $usuario = User::find(auth()->id());

        $int = (int)$usuario->num_f;
        if($int>=1){
        
        $usuario->update(["num_f" => $int-1 ]);}
        else{
            return Redirect::back()->with('message',' Ups !');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showf($file)
    {
        return view('content/showf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editf($file)
    {
        return view('content/editf');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatef(Request $request, $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyf(File $file)
    {
        $url = str_replace('storage', 'public', $file->url);
        Storage::delete($url);
        $file->delete();
        return redirect()->route('indexf')->with('eliminar', 'ok');
    }
}
