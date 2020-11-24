<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\universitarios;
class UniversitariosController extends Controller
{
    public function index()
    {
        $Universitarios = universitarios::orderBy('Nombres','asc')
        ->where('Sexo','=','masculino')
        ->get();
        return [
            'datos'=> $Universitarios
        ];
    }

    public function store(Request $request)
    {
       $Universitarios = new universitarios();
       $Universitarios->Nombres= $request->Nombres;
       $Universitarios->Apellidos= $request->Apellidos;
       $Universitarios->Edad= $request->Edad;
       $Universitarios->Sexo= $request->Sexo;
       $Universitarios->Email= $request->Email;
       $Universitarios->Direccion= $request->Direccion;
       $Universitarios->Estudio_enseñar= $request->estudioEnseñar;

       $Universitarios->save();
    }
    public function update(Request $request)
    {
        $Universitarios = universitarios::findOrFail($request->id);
        $Universitarios->Nombres= $request->Nombres;
        $Universitarios->Apellidos= $request->Apellidos;
        $Universitarios->Edad= $request->Edad;
        $Universitarios->Sexo= $request->Sexo;
        $Universitarios->Email= $request->Email;
        $Universitarios->Direccion= $request->Direccion;
        $Universitarios->Estudio_enseñar= $request->estudioEnseñar;
 
        $Universitarios->save();
    }

    public function destroy(Request $request)
    {
        $Universitarios = universitarios::findOrFail($request->id);
        
        $Universitarios->delete();
    }
}
