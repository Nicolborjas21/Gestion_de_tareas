<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
//use App\Http\Requests\StoreTareaRequest;
///use App\Http\Requests\UpdateTareaRequest;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::paginate(10);
        return view('raiztarea')->with('tareas', $tareas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Crearformulariot');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'estado'=>'required|in:Pendiente,En Progeso,Terminado',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date',
           
        ]);



        $nuevaTarea = new Tarea();

        //Formulario
        $nuevaTarea->nombre = $request->input('nombre');
        $nuevaTarea->descripcion = $request->input('descripcion');
        $nuevaTarea->estado = $request->input('estado');
        $nuevaTarea->fecha_inicio= $request->input('fecha_inicio');
        $nuevaTarea->fecha_fin = $request->input('fecha_fin');
        
        

        $creado = $nuevaTarea->save();

        if ($creado) {
            return redirect()->route('raizproyecto')
                ->with('mensaje', 'La tarea fue creada exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tarea = tarea::findOrfail($id);
        return view('detalletarea')->with('tarea', $tarea);
    }
    

    public function edit($id)
    {
        $tarea = Tarea::findOrFail($id);

        return view('Editformulariot')
            ->with('tarea', $tarea);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'estado'=>'required|in:Pendiente,En Progeso,Terminado',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date',
            'proyecto_id'=>'required|numeric:tareas,proyecto_id',
            'usuario_id'=>'required|numeric:tareas,usuario_id'
            
        ]);



        $MTarea = Tarea::findOrfail($id);

        //Formulario
        $MTarea->nombre = $request->input('nombre');
        $MTarea->descripcion = $request->input('descripcion');
        $MTarea->estado = $request->input('tipo');
        $MTarea->fecha_inicio= $request->input('fecha_inicio');
        $MTarea->fecha_fin = $request->input('fecha_fin');
        $MTarea->proyecto_id = $request->input('proyecto_id');
        $MTarea->usuario_id = $request->input('usuario_id');

        

        $creado = $MTarea->save();

        if ($creado) {
            return redirect()->route('raiztarea')
                ->with('mensaje', 'la Tarea fue modificada exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Remove the specified resource from storage.
     */
          public function destroy($id)
     {
        
        Tarea::destroy($id);
    
        //Redirigir

        return redirect('tareas/')->with('mensaje', 'La Tarea ha sido eliminada exitosamente');
    }  
        }
    

