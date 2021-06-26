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
        $files = File::where('user_id', auth()->user()->id)->paginate(2);
        
        return view('content/indexf', compact('files'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createf()
    {
        $herederos= DB::select('SELECT * FROM destinatarios where user_id = '.auth()->user()->id);
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
