<?php

namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexf()
    {
        return view('content/indexf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createf()
    {
        return view('content/createf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storef(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:500000|mimes:pdf,docx,doc,txt'
        ]);
        $archivos = $request->file('file')->store('public/archivos');

        $url = Storage::url($archivos);
        
        File::create([
            'url' => $url
        ]);
        return redirect()->route('indexf');
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
    public function destroyf($file)
    {
        //
    }
}
