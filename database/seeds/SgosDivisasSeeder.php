<?php

use Illuminate\Database\Seeder;
use App\Models\adm\SgosDivisas;

class SgosDivisasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SgosDivisas::create([
        	'id_propiedad' => '1',
        	'desc_divisa' => 'divisa1',
        ]);
    }
}
