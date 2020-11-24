<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aprendices;
class AprendicesController extends Controller
{
    public function index()
    {
        $Aprendices= aprendices::join('universitarios', 'aprendices.Apr_universidad','=','universitarios.id')
        ->select('Nombres', 'Apellidos', 'Pasion','universitarios.Nombres','universitarios.Apellidos','universitarios.Email')
        ->orderBy('universitarios.Nombres', 'asc')
        ->paginate(10);
        return[
            'recep'=>$Aprendices
        ];
    }
    public function store(Request $request)
    
    {
        $Aprendices = new aprendices();
        $Aprendices->Nombres= $request->Nombres;
        $Aprendices->Apellidos= $request->Apellidos;
        $Aprendices->Pasion= $request->Pasion;
        $Aprendices->Est_preUniversitario= $request->EstPreUniversitario;
        $Aprendices->Email= $request->Email;
        $Aprendices->Sexo= $request->Sexo;
        $Aprendices->Direccion= $request->Direccion;
        $Aprendices->Nro_aprendiz= $request->NroAprendiz;
        $Aprendices->Apr_universidad= $request->AprUniversidad;

        $Aprendices->save();
    }

    public function update(Request $request, $id)
    {
        $Aprendices = aprendices::findOrFail($request->id);
        $Aprendices->Nombres= $request->Nombres;
        $Aprendices->Apellidos= $request->Apellidos;
        $Aprendices->Pasion= $request->Pasion;
        $Aprendices->Est_preUniversitario= $request->EstPreUniversitario;
        $Aprendices->Email= $request->Email;
        $Aprendices->Sexo= $request->Sexo;
        $Aprendices->Direccion= $request->Direccion;
        $Aprendices->Nro_aprendiz= $request->NroAprendiz;
        $Aprendices->Apr_universidad= $request->AprUniversidad;

        $Aprendices->save();
    }

    public function destroy(Request $request)
    {
        $Aprendices = aprendices::findOrFail($request->id);
        
        $Aprendices->delete();
    }
}
