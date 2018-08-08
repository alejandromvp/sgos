<?php

namespace App\Http\Controllers\Adm_Sgos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\adm\SgosDivisas;
use DB;
use Carbon\Carbon;

class DivisasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisas = SgosDivisas::all();
        return view('Adm_agos.Divisas.index', compact('divisas'));
    }


    public function create()
    {
        return view('Adm_agos.Divisas.create');
    }


    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'id_propiedad' => "required",
            'desc_divisa' => "required|unique:adm_sgos_bovedas,desc_boveda",
        ], [
            'desc_propiedad' => 'El campo id propiedad es obligatorio',
            'desc_divisa' => 'El campo descripcion boveda es obligatorio',
        ]);

        SgosDivisas::create([
           'id_propiedad' => $validatedData['id_propiedad'],
           'desc_divisa' => $validatedData['desc_divisa'],
        ]);

        return redirect()->route('divisas.index');
    }

    public function show($id)
    {
        $divisa = SgosDivisas::where('id_divisa', $id)->first();
        return view('Adm_Agos.Divisas.show', compact('divisa'));
    }


    public function edit($id)
    {
        //$mensaje = DB::table('messages')->where('id', $id)->first();
        $divisa = SgosDivisas::where('id_divisa', $id)->first();
        return view('Adm_Agos.Divisas.edit', compact('divisa')); 
    }

    public function update(Request $request, $id)
    {
        $divisa = SgosDivisas::where('id_divisa', $id)->first();
        $validatedData = $request->validate([
            'desc_divisa' => "required|unique:adm_sgos_divisas,desc_divisa",
        ], [
            'desc_divisa' => 'El campo nombre es obligatorio',
        ]);

        DB::table('adm_sgos_divisas')->where('id_divisa', $id)->update([
            "desc_divisa" => $request->input('desc_divisa'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect()->route('divisas.show', compact('divisa') );
     }

    public function destroy($id)
    {
        $divisas = SgosDivisas::where('id_divisa', $id)->delete();
        return redirect()->route('divisas.index');
    }
}
