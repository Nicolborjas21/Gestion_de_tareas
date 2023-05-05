<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
//use App\Http\Requests\StoreUsuarioRequest;
//use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::paginate(10);
        return view('raizusuario')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Crearformulariou');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string|max:160',
            'correo'=>'required|min:10|max:255',
        ]);



        $nuevoUsuario = new Usuario();

        //Formulario
        $nuevoUsuario->nombre = $request->input('nombre');
        $nuevoUsuario->correo_electronico= $request->input('correo');
       
        

        $creado = $nuevoUsuario->save();

        if ($creado) {
            return redirect()->route('raizusuario')
                ->with('mensaje', 'El Usuario fue creado exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = usuario::findOrfail($id);
        return view('detalleusuario')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);

        return view('Editformulariou')->with('usuario', $usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id)
    {
        $request->validate([
            'nombre'=>'required|string|max:160',
            'correo'=>'required|email',
            
        ]);



        $MUsuario = Usuario::findOrfail($id);

        //Formulario
        $MUsuario->nombre = $request->input('nombre');
        $MUsuario->correo_electronico = $request->input('correo');
       
        

        $creado = $MUsuario->save();

        if ($creado) {
            return redirect()->route('raizusuario')
                ->with('mensaje', 'El usuario fue modificado exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
    
        //Redirigir

        return redirect('usuarios/')->with('mensaje', 'El usuario a ha sido eliminado exitosamente');
    }
}
