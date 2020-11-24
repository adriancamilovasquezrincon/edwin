<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\maestros;
class MaestrosController extends Controller
{
    public function index()
    {
        $Maestros = maestros::orderBy('Nombres','asc')
        ->where('Edad','<=','30')
        ->get();
        return [
            'datos'=> $Maestros
        ];
    }

    public function store(Request $request)
    {
       $Maestros = new maestros();
       $Maestros->Nombres= $request->Nombres;
       $Maestros->Apellidos= $request->Apellidos;
       $Maestros->Direccion= $request->Direccion;
       $Maestros->Edad= $request->Edad;
       $Maestros->Email= $request->Email;
       $Maestros->Sexo= $request->Sexo;
       $Maestros->Titulo= $request->Titulo;
       $Maestros->Especializado= $request->Especializado;

       $Maestros->save();
    }
    public function update(Request $request)
    {
        $Maestros = maestros::findOrFail($request->id);
        $Maestros->Nombres= $request->Nombres;
        $Maestros->Apellidos= $request->Apellidos;
        $Maestros->Direccion= $request->Direccion;
        $Maestros->Edad= $request->Edad;
        $Maestros->Email= $request->Email;
        $Maestros->Sexo= $request->Sexo;
        $Maestros->Titulo= $request->Titulo;
        $Maestros->Especializado= $request->Especializado;
 
        $Maestros->save();
    }


    public function destroy(Request $request)
    {
        $Maestros = maestros::findOrFail($request->id);
        
        $Maestros->delete();
    }
}
