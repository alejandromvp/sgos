<?php

use Illuminate\Database\Seeder;
use App\Models\adm\SgosBovedas;

class SgosBovedasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SgosBovedas::create([
        	'id_propiedad' => '1',
        	'desc_boveda' => 'boveda1',
        ]);
    }
}
