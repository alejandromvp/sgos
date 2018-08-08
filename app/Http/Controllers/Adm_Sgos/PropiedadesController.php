<?php

namespace App\Http\Controllers\Adm_Sgos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\adm\SgosPropiedades;
use DB;
use Carbon\Carbon;

class PropiedadesController extends Controller
{

    public function index()
    {
        $propiedades = SgosPropiedades::all();
        return view('Adm_agos.Propiedades.index', compact('propiedades'));
    }


    public function create()
    {
        return view('Adm_agos.Propiedades.create');
    }


    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'id_propiedad' => "required|unique:adm_sgos_propiedades,id_propiedad",
            'desc_propiedad' => "required",
        ], [
            'id_propiedad' => 'El campo nombre es obligatorio',
            'desc_propiedad' => 'El campo nombre es obligatorio',
        ]);

        SgosPropiedades::create([
           'id_propiedad' => $validatedData['id_propiedad'],
           'desc_propiedad' => $validatedData['desc_propiedad'],
        ]);

        return redirect()->route('propiedades.index');
    }

    public function show($id)
    {
        $propiedad = SgosPropiedades::where('id_propiedad', $id)->first();
        return view('Adm_Agos.Propiedades.show', compact('propiedad'));
    }


    public function edit($id)
    {
        //$mensaje = DB::table('messages')->where('id', $id)->first();
        $propiedad = SgosPropiedades::where('id_propiedad', $id)->first();
        return view('Adm_Agos.Propiedades.edit', compact('propiedad')); 
    }

    public function update(Request $request, $id)
    {
        $propiedad = SgosPropiedades::where('id_propiedad', $id)->first();
        $validatedData = $request->validate([
            'desc_propiedad' => "required",
            'desc_propiedad' => "required",
        ], [
            'desc_propiedad' => "este campo es nesesario",
            'desc_propiedad' => 'El campo nombre es obligatorio',
        ]);

        DB::table('adm_sgos_propiedades')->where('id_propiedad', $id)->update([
            "desc_propiedad" => $request->input('desc_propiedad'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect()->route('propiedades.show', compact('id') );
     }

    public function destroy($id)
    {
        $propiedad = SgosPropiedades::where('id_propiedad', $id)->delete();
        return redirect()->route('propiedades.index');
    }
}
