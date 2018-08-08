<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdmSgosSector extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_sgos_sector', function (Blueprint $table) {
            $table->increments('id_sector');
            $table->string('id_propiedad');
            $table->foreign('id_propiedad')->references('id_propiedad')->on('adm_sgos_propiedades');
            $table->string('desc_sector', 45)->unique();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adm_sgos_sector');
    }
}
