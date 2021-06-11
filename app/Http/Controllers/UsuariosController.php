<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Plan;
use App\UsuariosModel;

class UsuariosController extends Controller
{

    public function planes(){

        $plans = Plan::get();
        return view('content.planes', compact('plans'));
    }
    public function registro(){

        return view ('content/registro');
    }
    public function guardar_registro(Request $request){
       
        
        $usu = UsuariosModel::create(array(

            'tip_usu' => 'free',

            'nombre'=>$request->input('nombre'),
            'app'=>$request->input('app'),
            'apm'=>$request->input('apm'),
            'correo'=>$request->input('correo'),
            'contrasena'=>$request->input('contrasena'),
            'fn'=>$request->input('fn'),
            'telefono'=>$request->input('telefono'),
            'imagen' => $request->input('imagen'),
        ));

                //------------- Creacion de sesiones ---------------
                
                $request->session()->put('session_id', \DB::getPdo()->lastInsertId());
                $request->session()->put('session_name', $request->input('nombre'));
                $request->session()->put('session_tipo', $request->input('tip_usu'));
    
                //------------- Consultar sesion ---------------
    
                $session_id = $request->session()->get('session_id');
                $session_name = $request->session()->get('session_name');
                $session_tipo = $request->session()->get('session_tipo');

            
                return redirect()->route("planes");
        
    }
}
