<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Plan;
use App\UsuariosModel;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Redirect;


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

    public function perfil(){

        $usr = \DB::select('SELECT * FROM  users u
        WHERE u.id = '.auth()->user()->id);
        
        return view('content.perfil')->with(['usr' => $usr]);
        
    }

    public function editar_usr($id){
       
        $user = User::find($id);
        return view('content.editar_usr')
        ->with(['user'=> $user]);
    }
    public function salvar(user $id, Request $request){
        
        $id->update($request->only(
            'name', 
            'email',
             'app','apm',
             'fn',
             'telefono',
             'tip_usu',
             )
            );
        return redirect()->route('perfil',['id' => $id->id]);
        //--- editar_usr 
    }

    public function actimg(Request $request){

        $this->validate($request,[

            'imagen' => 'required|file'
        ]);

        $usuar = Auth::user();
        $extension = $request->file('imagen')->getClientOriginalName();
        $filename = time(). '.' . $extension;
        $path = public_path('images/Usuarios/'.$filename);

        Image::make($request->file('imagen'))
        ->fit(244,244)
        ->save($path);

        $usuar->imagen = $filename;
        $usuar->save();

        $data['success'] = true;
        $data['filename'] = $filename;

        return $data;
    }
}
