<?php

namespace App\Http\Controllers\Adm_Sgos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\adm\SgosSector;
use App\Models\adm\SgosPropiedades;
use DB;
use Carbon\Carbon;;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectores = SgosSector::all();
        return view('Adm_agos.sector.index', compact('sectores'));
    }


    public function create()
    {
        $propiedades = SgosPropiedades::all();
        return view('Adm_agos.sector.create', compact('propiedades'));
    }


    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'id_propiedad' => "required",
            'desc_sector' => "required|unique:adm_sgos_sector,desc_sector",
        ], [
            'id_propiedad' => 'El campo id propiedad es obligatorio',
            'desc_sector' => 'El campo descripcion sector es obligatorio',
        ]);

        SgosSector::create([
           'id_propiedad' => $validatedData['id_propiedad'],
           'desc_sector' => $validatedData['desc_sector'],
        ]);

        return redirect()->route('sectores.index');
    }

    public function show($id)
    {
        $sector = SgosSector::where('id_sector', $id)->first();
        return view('Adm_agos.sector.show', compact('sector'));
    }


    public function edit($id)
    {
        $propiedades = SgosPropiedades::all();
        //$mensaje = DB::table('messages')->where('id', $id)->first();
        $sector = SgosSector::where('id_sector', $id)->first();
        return view('Adm_agos.sector.edit', compact('sector', 'propiedades')); 
    }

    public function update(Request $request, $id)
    {
        $sector = SgosSector::where('id_sector', $id)->first();
        $validatedData = $request->validate([
            'desc_sector' => "required",
            'id_propiedad' => "required",
        ], [
            'desc_sector' => 'El campo nombre es obligatorio',
        ]);

        DB::table('adm_sgos_sector')->where('id_sector', $id)->update([
            "id_propiedad" => $request->input('id_propiedad'),
            "desc_sector" => $request->input('desc_sector'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect()->route('sectores.show', compact('sector') );
     }

    public function destroy($id)
    {
        $sectores = SgosSector::where('id_sector', $id)->delete();
        return redirect()->route('sectores.index');
    }
}
