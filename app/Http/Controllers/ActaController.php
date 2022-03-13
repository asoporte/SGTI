<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acta;
use Illuminate\Auth\Events\Validated;

class ActaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//LEER TODOS LOS REGISTROS
    {
        $actas = Acta::all();
        return view('actas.index', compact('actas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//ABRIR FORMULARIO PARA CREAR UN REGISTRO
    {
        return view('actas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//GUARDAR EN LA BD EL NUEVO REGISTRO
    {
        //SE REALIZA VALIDACION A LOS CAMPOS DEL CREATE, PARA SABER QQUE CAMPOS SON REQUERIDOS
        $request->validate([
            'Usuario' => 'required',
            'Ubicacion' => 'required',
            'Tipo_Solicitud' => 'required',
            'Fecha' => 'required',
            'Serial' => 'required',
            'Equipo' => 'required',
            'Responsable' => 'required',
            'Version' => 'required',
            'Documento'=> 'required'
        ]);
        
        $acta = Acta::create($request->all());
         //EL MENSAJE LO MOSTRAREMOS EN LA VISTA DE INDEX CUANDO GUARDE
        return redirect()->route('actas.index', $acta)->with('guardar','El acta ha sido guardada satisfactoriamente');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Acta $acta)//VISUALIZAR UN SOLO REGISTRO
    {
        return view('actas.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Acta $acta)//ABIR UN FORMULARIO PARA EDICION DE UN REGISTRO
    {

        return view('actas.edit', compact('acta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acta $acta)//ACTUALIZAR LA INFORMACION D EUN REGISTRO
    {
         //SE REALIZA VALIDACION A LOS CAMPOS DEL CREATE, PARA SABER QQUE CAMPOS SON REQUERIDOS
         $request->validate([
            'Usuario' => 'required',
            'Ubicacion' => 'required',
            'Tipo_Solicitud' => 'required',
            'Fecha' => 'required',
            'Serial' => 'required',
            'Equipo' => 'required',
            'Responsable' => 'required',
            'Version' => 'required',
            'Documento'=> 'required'
        ]);      
        $acta->update($request->all());
        //EL MENSAJE LO MOSTRAREMOS EN LA VISTA DE INDEX CUANDO ACTULICE
        return redirect()->route('actas.index')->with('actualizar','El acta ha sido actualiza exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acta $acta)//ELIMINAR UN REGISTRO DE LA BD
    {
        $acta->delete();
        return redirect()->route('actas.index')->with('eliminar','El acta fue eliminada satisfactoriamente');
    }
}
