<?php

use Illuminate\Database\Seeder;
use App\Models\adm\SgosBancos;

class SgosBancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SgosBancos::create([
        	'id_propiedad' => '1',
        	'desc_banco' => 'banco1',
        ]);
    }
}
