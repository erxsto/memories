<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HerederosModel;
use App\User;
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
        $hro = HerederosModel::find($hro->id_destinatario);
        $hro->delete();
        return redirect()->route('mis_herederos')->with('eliminar', 'ok');
    }

    public function mis_herederos(){

        $h = HerederosModel::all();

        return view('herederos.mis_herederos')
                    ->with(['h'=>$h]);
    }
}
