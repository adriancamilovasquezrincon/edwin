<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profesores;
class ProfesoresController extends Controller
{
    public function index()
    {
        $Profesores = profesores::orderBy('Nombres','desc')
        ->where('Sexo','=','femenino')
        ->get();
        return [
            'datos'=> $Profesores
        ];
    }

    public function store(Request $request)
    {
       $Profesores = new profesores();
       $Profesores->Nombres= $request->Nombres;
       $Profesores->Apellidos= $request->Apellidos;
       $Profesores->Direccion= $request->Direccion;
       $Profesores->Telefono= $request->Telefono;
       $Profesores->Sexo= $request->Sexo;
       $Profesores->Edad= $request->Edad;
       $Profesores->Email= $request->Email;
       $Profesores->Cargo= $request->Cargo;

       $Profesores->save();
    }
    public function update(Request $request)
    {
        $Profesores = profesores::findOrFail($request->id);
        $Profesores->Nombres= $request->Nombres;
        $Profesores->Apellidos= $request->Apellidos;
        $Profesores->Direccion= $request->Direccion;
        $Profesores->Telefono= $request->Telefono;
        $Profesores->Sexo= $request->Sexo;
        $Profesores->Edad= $request->Edad;
        $Profesores->Email= $request->Email;
        $Profesores->Cargo= $request->Cargo;
 
        $Profesores->save();
    }

    public function destroy(Request $request)
    {
        $Profesores = profesores::findOrFail($request->id);
        
        $Profesores->delete();
    }
}
