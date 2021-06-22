<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;

class TextsController extends Controller
{
    public function textindex()
    {
        $texts = Text::orderBy('id','desc')
                    ->get();
        return view('content.textindex', ['texts' => $texts]);
    }

    public function textcreates(){
        return view('content.textcreates');
    }

    public function store(Request $request){
        $data = request()->validate([
            'titulo' => 'required|max:255',
            'desc' => 'required'
        ]);
        $user = auth()->user();
        $text = new Text();
        $text->titulo = $request->input('titulo');
        $text->desc = $request->input('desc');
        $text->user_id = $user->id;
        $text->save();
        return redirect('textindex');
    }
    public function texteditar(Text $text)
    {
        $text = Text::find($text->id);
        return view('content.texteditar', ['text' => $text]);
    }
    public function update(Request $request, Text $text)
    {
        $data = request()->validate([
            'titulo' => 'required|max:255',
            'desc' => 'required'
        ]);
        $text = Text::findOrFail($text->id);
        $text->titulo = $request->input('titulo');
        $text->desc = $request->input('desc');
        $text->save();
        return redirect('textindex');
    }
}
