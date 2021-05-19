<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UsuariosModel;

    class LoginController extends Controller
{
    public function login(){

        return view('content/login');

    }

    public function validar(Request $request){
        $correo= $request->input('correo');
        $contrasena= $request->input('contrasena');
        
        $consulta = UsuariosModel::where('correo', '=', $correo)
            ->where('contrasena', '=', $contrasena)
            ->get();
    
        if(count($consulta)==0){

            return redirect()->route("login");
        
        }else{

            //------------- Creacion de sesiones ---------------
            
            $request->session()->put('session_id', $consulta[0]->id_usuario);
            $request->session()->put('session_name', $consulta[0]->nombre);
            $request->session()->put('session_tipo', $consulta[0]->tip_usu);

            //------------- Consultar sesion ---------------

            $session_id = $request->session()->get('session_id');
            $session_name = $request->session()->get('session_name');
            $session_tipo = $request->session()->get('session_tipo');
            
            if($session_tipo == 'free'){
            
                // return "contenido.admin";
                return redirect()->route("index");

            
            }else{

                if($session_tipo == 'basico'){

                    // return "contenido.usuario";
                    return redirect()->route("index");

                }else{
                    
                    // return "contenido.otro";
                    return redirect()->route("index");

                    
                }

            }


        }
        
    
    }

    public function logout(Request $request){

            //------------- Consultar sesion ---------------
        $request->session()->forget('session_id');
        $request->session()->forget('session_name');
        $request->session()->forget('session_tipo');

        return redirect()->route("login");
    }


    public function perfil(){

        $usu = UsuariosModel::find(session('session_id'));
        return view("content.perfil")
            ->with(['usu' => $usu]);
 
    }


}
