<?php

namespace App\Http\Controllers;

use App\Docentes;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['docentes']=Docentes::paginate(5);
        return view('docentes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'RFID' => 'required|string|max:100',
            'Nombres' => 'required|string|max:100',
            'Apellidos' => 'required|string|max:100',
            'No_Empleado' => 'required|string|max:20'
        ];

        $Mensaje=["required"=>'El :attribute es Requerido'];

        $this->validate($request,$campos,$Mensaje);
        
        //$datosDocente=request()->all();
        
        $datosDocente=request()->except('_token');

        Docentes::insert($datosDocente);
    
        //return response()->json($datosDocente);
        return redirect('docentes')->with('Mensaje','Empleado Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function show(Docentes $docentes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $docente = Docentes::findOrFail($id);
        return view('docentes.edit',compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosDocente=request()->except(['_token','_method']);
        Docentes::where('id','=',$id)->update($datosDocente);

        //$docente = Docentes::findOrFail($id);
        //return view('docentes.edit',compact('docente'));
        return redirect('docentes')->with('Mensaje','Empleado Editado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        Docentes::destroy($id);
        return redirect('docentes')->with('Mensaje','Empleado Eliminado con Exito');
    }
}
