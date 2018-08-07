<?php

use Illuminate\Database\Seeder;
use App\Models\adm\SgosPropiedades;

class SgosPropiedadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SgosPropiedades::create([
        	'desc_propiedad' => 'propiedad1',
        ]);
        SgosPropiedades::create([
            'desc_propiedad' => 'propiedad2',
        ]);
        SgosPropiedades::create([
            'desc_propiedad' => 'propiedad3',
        ]);
        SgosPropiedades::create([
            'desc_propiedad' => 'propiedad4',
        ]);
        SgosPropiedades::create([
            'desc_propiedad' => 'propiedad5',
        ]);
    }

}
