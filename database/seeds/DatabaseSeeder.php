<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTables([
    	 	'adm_sgos_bancos',
    	 	'adm_sgos_bovedas',
    	 	'adm_sgos_divisas',
    	 	'adm_sgos_propiedades',
    	 	'adm_sgos_sector',
    	]);

        $this->call(SgosPropiedadesSeeder::class);
        $this->call(SgosBancosSeeder::class);
        $this->call(SgosBovedasSeeder::class);
        $this->call(SgosDivisasSeeder::class);
        $this->call(SgosSectorSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	foreach ($tables as $table){
    		DB::table($table)->truncate();
    	}
    }
}
