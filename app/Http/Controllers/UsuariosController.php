<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function planes(){

        return view ('content/planes');
    }
    public function registro(){

        return view ('content/registro');
    }
    public function guardar_registro(Request $request){
        //dd($request->all());
        
        /*$dir = DireccionesModel::create(array(
            'calle_numero'=>$request->input('calle_numero'),
            'referencias'=>$request->input('referencias'),
            'estado'=>$request->input('estado'),
            'municipio'=>$request->input('municipio'),

        ));

        $last_dir = \DB::select('SELECT * FROM tb_direcciones ORDER BY id_direccion DESC LIMIT 1');*/
        //$last_dir = DireccionesModel::where('id_direcciones', )last();

       // dd($last_dir);

        $usu = UsuariosModel::create(array(

            'tip_usu' =>$request->input('tip_usu'),

            'nombre'=>$request->input('nombre'),
            'app'=>$request->input('app'),
            'apm'=>$request->input('apm'),
            'correo'=>$request->input('correo'),
            'contrasena'=>$request->input('contrasena'),
            'fn'=>$request->input('fn'),
            'telefono'=>$request->input('telefono'),
            'imagen' => $request->input('img'),
        ));

            //dd($request->all());

        
        return redirect()->route('registro');
        
    }
}
