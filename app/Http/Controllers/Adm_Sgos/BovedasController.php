<?php

namespace App\Http\Controllers\Adm_Sgos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\adm\SgosBovedas;
use DB;
use Carbon\Carbon;

class BovedasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bovedas = SgosBovedas::all();
        return view('Adm_agos.Bovedas.index', compact('bovedas'));
    }


    public function create()
    {
        return view('Adm_agos.Bovedas.create');
    }


    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'id_propiedad' => "required",
            'desc_boveda' => "required|unique:adm_sgos_bovedas,desc_boveda",
        ], [
            'desc_propiedad' => 'El campo id propiedad es obligatorio',
            'desc_boveda' => 'El campo descripcion boveda es obligatorio',
        ]);

        SgosBovedas::create([
           'id_propiedad' => $validatedData['id_propiedad'],
           'desc_boveda' => $validatedData['desc_boveda'],
        ]);

        return redirect()->route('bovedas.index');
    }

    public function show($id)
    {
        $propiedad = SgosBovedas::where('id_boveda', $id)->first();
        return view('Adm_Agos.Bovedas.show', compact('propiedad'));
    }


    public function edit($id)
    {
        //$mensaje = DB::table('messages')->where('id', $id)->first();
        $boveda = SgosBovedas::where('id_boveda', $id)->first();
        return view('Adm_Agos.Bovedas.edit', compact('boveda')); 
    }

    public function update(Request $request, $id)
    {
        $boveda = SgosBovedas::where('id_boveda', $id)->first();
        $validatedData = $request->validate([
            'desc_boveda' => "required|unique:adm_sgos_bovedas,desc_boveda",
        ], [
            'desc_boveda' => 'El campo nombre es obligatorio',
        ]);

        DB::table('adm_sgos_bovedas')->where('id_boveda', $id)->update([
            "desc_boveda" => $request->input('desc_boveda'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect()->route('bovedas.show', compact('boveda') );
     }

    public function destroy($id)
    {
        $boveda = SgosBovedas::where('id_boveda', $id)->delete();
        return redirect()->route('bovedas.index');
    }
}
