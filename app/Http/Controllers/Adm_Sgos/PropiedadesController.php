<?php

namespace App\Http\Controllers\Adm_Sgos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\adm\SgosPropiedades;
use DB;
use Carbon\Carbon;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedades = SgosPropiedades::all();
        return view('Adm_agos.Propiedades.index', compact('propiedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propiedad = SgosPropiedades::where('id_propiedad', $id)->first();
        return view('Adm_Agos.Propiedades.show', compact('propiedad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$mensaje = DB::table('messages')->where('id', $id)->first();
        $propiedad = SgosPropiedades::where('id_propiedad', $id)->first();
        return view('Adm_Agos.Propiedades.edit', compact('propiedad')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $propiedad = SgosPropiedades::where('id_propiedad', $id)->first();
        $validatedData = $request->validate([
            'desc_propiedad' => 'required|unique:adm_sgos_propiedades,desc_propiedad',
        ], [
            'desc_propiedad' => 'El campo nombre es obligatorio',
        ]);

        DB::table('adm_sgos_propiedades')->where('id_propiedad', $id)->update([
            "desc_propiedad" => $request->input('desc_propiedad'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect()->route('propiedades.show', compact('id') );
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propiedad = SgosPropiedades::where('id_propiedad', $id)->delete();
        return redirect()->route('propiedades.index');
    }
}
