<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HerederosModel;
use App\User;
use Auth;

class HerederosController extends Controller
{
    public function registro_h(){

        return view('herederos.registro');
    }

    public function guardar_registro(Request $request){
        

        $usu = HerederosModel::create(array(
            'user_id' => Auth::user()->id ,
            'nombre'=>$request->input('nombre'),
            'app'=>$request->input('primer_apellido'),
            'apm'=>$request->input('segundo_apellido'),
            'correo'=>$request->input('correo'),
            'contrasena'=>$request->input('contrasena'),
            'telefono'=>$request->input('telefono'),
        ));

            // dd($request->all());
        $usuario = User::find(auth()->id());

        $int = (int)$usuario->num_h;
        $usuario->update(["num_h" => $int-1 ]);

        
        return redirect()->route('home');
        
    }
}
