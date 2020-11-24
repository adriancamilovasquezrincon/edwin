<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantes;
class EstudiantesController extends Controller
{
    public function index()
    {
        $Estudiantes= estudiantes::join('maestros', 'estudiantes.est_maestro','=','maestros.id')
        ->select('Nombres', 'Apellidos', 'Direccion','maestros.Nombres','maestros.Apellidos','maestros.Edad')
        ->orderBy('maestros.Nombres', 'asc')
        ->get();
        return[
            'recep'=>$Estudiantes
        ];
    }
    public function store(Request $request)
    
    {
        $Estudiantes = new estudiantes();
        $Estudiantes->Nombres= $request->Nombres;
        $Estudiantes->Apellidos= $request->Apellidos;
        $Estudiantes->Direccion= $request->Direccion;
        $Estudiantes->Edad= $request->Edad;
        $Estudiantes->Email= $request->Email;
        $Estudiantes->Sexo= $request->Sexo;
        $Estudiantes->Talento= $request->Talento;
        $Estudiantes->est_maestro= $request->estMaestro;

        $Estudiantes->save();
    }

    public function update(Request $request, $id)
    {
        $Estudiantes = estudiantes::findOrFail($request->id);
        $Estudiantes->Nombres= $request->Nombres;
        $Estudiantes->Apellidos= $request->Apellidos;
        $Estudiantes->Direccion= $request->Direccion;
        $Estudiantes->Edad= $request->Edad;
        $Estudiantes->Email= $request->Email;
        $Estudiantes->Sexo= $request->Sexo;
        $Estudiantes->Talento= $request->Talento;
        $Estudiantes->est_maestro= $request->estMaestro;

        $Estudiantes->save();
    }

    public function destroy(Request $request)
    {
        $Estudiantes = estudiantes::findOrFail($request->id);
        
        $Estudiantes->delete();
    }
}
