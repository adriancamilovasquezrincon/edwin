<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cantantes;
class CantantesController extends Controller
{
    public function index()
    {
        $Cantantes= cantantes::join('socios', 'cantantes.id','=','socios.id')
        ->select('Nombres', 'Apellidos', 'Telefono','socios.Nombres','socios.Apellidos','socios.telefono')
        ->get();
        return[
            'cantantes'=>$Cantantes
        ];
    }
    public function store(Request $request)
    
    {
        $Cantantes = new cantantes();
        $Cantantes->Nombres= $request->Nombres;
        $Cantantes->Apellidos= $request->Apellidos;
        $Cantantes->Telefono= $request->Telefono;
        $Cantantes->Nombre_artistico= $request->nombreArtistico;
        $Cantantes->Sexo= $request->Sexo;
        $Cantantes->Direccion= $request->Direccion;
        $Cantantes->Edad= $request->Edad;
        $Cantantes->cant_socio= $request->cantSocio;

        $Cantantes->save();
    }

    public function update(Request $request)
    {
        $Cantantes = cantantes::findOrFail($request->id);
        $Cantantes->Nombres= $request->Nombres;
        $Cantantes->Apellidos= $request->Apellidos;
        $Cantantes->Telefono= $request->Telefono;
        $Cantantes->Nombre_artistico= $request->Nombre_artistico;
        $Cantantes->Sexo= $request->Sexo;
        $Cantantes->Direccion= $request->Direccion;
        $Cantantes->Edad= $request->Edad;
        $Cantantes->cant_socio= $request->cant_socio;

        $Cantantes->save();
    }

    public function destroy(Request $request)
    {
        $Cantantes = cantantes::findOrFail($request->id);
        
        $Cantantes->delete();
    }
}
