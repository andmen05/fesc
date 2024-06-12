<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.ingreso');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Valida los datos enviados en la solicitud, asegurandose que sean requeridos.
         $request->validate([
            'nombre'=> 'required',
            'numero_documento'=> 'required',
            'tipo_documento'=> 'required',
            'apellido'=> 'required',
            'telefono'=> 'required',
            'correo'=> 'required',
            'direccion'=> 'required',
        ]);
        // realiza una consulta en la base de datos para obtener el id de los registros
        
        // dd($companies);
       
        // dd($type_permissions->Id);
        // Crea nuevos registros en la tabla permissions.
        Administrador::create([
            'diagnostic_id' => $request->description,
            //'company_id' => $companies->id,
            'nombre' => $request->nombre,
            'numero_documento' => $request->Finicio,
            'end_date' => $request->Ffin,
            'observations' => $request->observacion,
            'amount_days' => $request->amount_days          
        ]);
        // Redirige a la ruta registroTP
        return redirect()->route('registroi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('Admin.vista');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
