<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HerederosModel;
use App\User;
use App\File;
use Auth;
use Illuminate\Support\Facades\DB;

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

    public function si($id){

        $h = \DB::select('SELECT * FROM  destinatarios d
        WHERE d.user_id = '. $id);
        $h->delete();
        
        $usuario = User::find(auth()->id());

        $int = (int)$usuario->num_h;
        $usuario->update(["num_h" => $int+1 ]);

    }

    public function eliminar_h(HerederosModel $hro)
    {
        $usuario = User::find(auth()->id());
        $hro = HerederosModel::find($hro->id_destinatario);
        $hro->delete();
        $int = (int)$usuario->num_h;
        $usuario->update(["num_h" => $int+1 ]);
        return redirect()->route('mis_herederos')->with('eliminar', 'ok');
    }

    public function mis_herederos(){

        $h = HerederosModel::all();

        return view('herederos.mis_herederos')
                    ->with(['h'=>$h]);
    }

    public function login_h(){

        
        return view('h.login_h');
    }

    public function validar_h(Request $request){
         
         $correo= $request->input('correo');
         $contrasena= $request->input('contrasena');
        
         $consulta = HerederosModel::where('correo', '=', $correo)
             ->where('contrasena', '=', $contrasena)
             ->get();
    
         if(count($consulta)==0){

             return redirect()->route("login_h");
        
         }else{

            //  ------------- Creacion de sesiones ---------------
            
             $request->session()->put('session_id', $consulta[0]->id_destinatario);
             $request->session()->put('session_name', $consulta[0]->nombre);
             $request->session()->put('session_tipo', 'heredero');

            // ------------- Consultar sesion ---------------

             $session_id = $request->session()->get('session_id');
             $session_name = $request->session()->get('session_name');
             $session_tipo = $request->session()->get('session_tipo');
            
             
            return view('h.index_h');

         }
        
    
     }

     public function logout(Request $request){

            // ------------- Consultar sesion ---------------
         $request->session()->forget('session_id');
         $request->session()->forget('session_name');
         $request->session()->forget('session_tipo');

         return redirect()->route("login_h");
     }
    

    public function index_h(){

        $herederos = DB::select('SELECT * FROM destinatarios ,users ,files where files.user_id =  users.id and users.id = destinatarios.user_id and destinatarios.id_destinatario = ' .session("session_id"));
       
        return view('h.index_h')
        ->with(['herederos' => $herederos]);


    }
}
