<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interpretes;
class InterpretesController extends Controller
{
    public function index()
    {
        $interpretes= interpretes::join('profesores', 'interpretes.int_profesor','=','profesores.id', 'estudiantes', 'interpretes.int_estudiante', '=', 'estudiantes.id')
        ->select('Nombres', 'Apellidos', 'Instrumento','profesores.Nombres','profesores.Apellidos','profesores.cargo')
        ->select('Nombres', 'Edad', 'Ocupacion','estudiantes.Nombres','estudiantes.Apellidos','estudiantes.Talento')
        ->orderBy('profesores.Nombres', 'asc')
        ->orderBy('estudiantes.Nombres', 'asc')
        ->get();
        return[
            'recep'=>$interpretes
        ];
    }
    public function store(Request $request)
    
    {
        $interpretes = new interpretes();
        $interpretes->Nombres= $request->Nombres;
        $interpretes->Apellidos= $request->Apellidos;
        $interpretes->Instrumento= $request->Instrumento;
        $interpretes->Edad= $request->Edad;
        $interpretes->Ocupacion= $request->Ocupacion;
        $interpretes->Email= $request->Email;
        $interpretes->int_profesor= $request->intProfesor;
        $interpretes->int_estudiante= $request->intEstudiante;

        $interpretes->save();
    }

    public function update(Request $request, $id)
    {
        $interpretes = interpretes::findOrFail($request->id);
        $interpretes->Nombres= $request->Nombres;
        $interpretes->Apellidos= $request->Apellidos;
        $interpretes->Instrumento= $request->Instrumento;
        $interpretes->Edad= $request->Edad;
        $interpretes->Ocupacion= $request->Ocupacion;
        $interpretes->Email= $request->Email;
        $interpretes->int_profesor= $request->intProfesor;
        $interpretes->int_estudiante= $request->intEstudiante;

        $interpretes->save();
    }

    public function destroy(Request $request)
    {
        $interpretes = interpretes::findOrFail($request->id);
        
        $interpretes->delete();
    }
}
