<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
//use App\Http\Requests\StoreProyectoRequest;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::paginate(10);
        return view('raizproyecto')->with('proyectos', $proyectos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Crearformulariop');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string|max:160',
            'descripcion'=>'required|min:0|max:255',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date|after_or_equal:fecha_inicio',
            
        ]);



        $nuevoProyecto = new Proyecto();

        //Formulario
        $nuevoProyecto->nombre = $request->input('nombre');
        $nuevoProyecto->descripcion = $request->input('descripcion');
        $nuevoProyecto->fecha_inicio= $request->input('fecha_inicio');
        $nuevoProyecto->fecha_fin = $request->input('fecha_fin');
        

        $creado = $nuevoProyecto->save();

        if ($creado) {
            return redirect()->route('raizproyecto')
                ->with('mensaje', 'El proyecto fue creado exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $proyecto = Proyecto::findOrfail($id);
        return view('detalleproyecto')->with('proyecto', $proyecto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        return view('Editformulariop')
            ->with('proyecto', $proyecto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id)
    {
        $request->validate([
            'nombre'=>'required|string|max:160' ,
            'descripcion'=>'required|min:0|max:255',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date',
            
        ]);



        $MProyecto = Proyecto::findOrfail($id);

        //Formulario
        $MProyecto->nombre = $request->input('nombre');
        $MProyecto->descripcion = $request->input('descripcion');
        $MProyecto->fecha_inicio= $request->input('fecha_inicio');
        $MProyecto->fecha_fin = $request->input('fecha_fin');
        

        $creado = $MProyecto->save();

        if ($creado) {
            return redirect()->route('raizproyecto')
                ->with('mensaje', 'El proyecto fue modificado exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        
            Proyecto::destroy($id);
    
            //Redirigir
    
            return redirect('proyectos/')->with('mensaje', 'Proyecto eliminado exitosamente');
        }
    }

