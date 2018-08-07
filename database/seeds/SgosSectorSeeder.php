<?php

use Illuminate\Database\Seeder;
use App\Models\adm\SgosSector;

class SgosSectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SgosSector::create([
        	'id_propiedad' => '1',
        	'desc_sector' => 'sector1',
        ]);
    }
}
