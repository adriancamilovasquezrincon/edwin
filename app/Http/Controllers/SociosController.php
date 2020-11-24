<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socios;
class SociosController extends Controller
{
    public function index()
    {
        $Socios = socios::orderBy('Nombres','asc')
        ->where('Sexo','=','masculino')
        ->get();
        return [
            'datos'=> $Socios
        ];
    }

    public function store(Request $request)
    {
       $Socios = new socios();
       $Socios->Nombres= $request->Nombres;
       $Socios->Apellidos= $request->Apellidos;
       $Socios->telefono= $request->telefono;
       $Socios->Direccion= $request->Direccion;
       $Socios->Edad= $request->Edad;
       $Socios->Email= $request->Email;
       $Socios->Sexo= $request->Sexo;
       $Socios->Contrato= $request->Contrato;

       $Socios->save();
    }
    public function update(Request $request)
    {
        $Socios = socios::findOrFail($request->id);
        $Socios->Nombres= $request->Nombres;
        $Socios->Apellidos= $request->Apellidos;
        $Socios->telefono= $request->telefono;
        $Socios->Direccion= $request->Direccion;
        $Socios->Edad= $request->Edad;
        $Socios->Email= $request->Email;
        $Socios->Sexo= $request->Sexo;
        $Socios->Contrato= $request->Contrato;
 
        $Socios->save();
    }


    public function destroy(Request $request)
    {
        $Socios = socios::findOrFail($request->id);
        $Socios->delete();
    }
}
