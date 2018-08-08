<?php

namespace App\Http\Controllers\Adm_Sgos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\adm\SgosBancos;
use DB;
use Carbon\Carbon;

class BancosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancos = SgosBancos::all();
        return view('Adm_agos.Bancos.index', compact('bancos'));
    }


    public function create()
    {
        return view('Adm_agos.Bancos.create');
    }


    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'id_propiedad' => "required",
            'desc_banco' => "required|unique:adm_sgos_bancos,desc_banco",
        ], [
            'id_propiedad' => 'El campo id propiedad es obligatorio',
            'desc_banco' => 'El campo descripcion boveda es obligatorio',
        ]);

        SgosBancos::create([
           'id_propiedad' => $validatedData['id_propiedad'],
           'desc_banco' => $validatedData['desc_banco'],
        ]);

        return redirect()->route('bancos.index');
    }

    public function show($id)
    {
        $banco = SgosBancos::where('id_banco', $id)->first();
        return view('Adm_agos.Bancos.show', compact('banco'));
    }


    public function edit($id)
    {
        //$mensaje = DB::table('messages')->where('id', $id)->first();
        $banco = SgosBancos::where('id_banco', $id)->first();
        return view('Adm_agos.Bancos.edit', compact('banco')); 
    }

    public function update(Request $request, $id)
    {
        $banco = SgosBancos::where('id_banco', $id)->first();
        $validatedData = $request->validate([
            'desc_banco' => "required|unique:adm_sgos_bancos,desc_banco",
        ], [
            'desc_banco' => 'El campo banco es obligatorio',
        ]);

        DB::table('adm_sgos_bancos')->where('id_banco', $id)->update([
            "desc_banco" => $request->input('desc_banco'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect()->route('bancos.show', compact('banco') );
     }

    public function destroy($id)
    {
        $banco = SgosBancos::where('id_banco', $id)->delete();
        return redirect()->route('bancos.index');
    }
}
