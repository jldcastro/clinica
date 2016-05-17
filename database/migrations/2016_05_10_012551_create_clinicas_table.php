<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clinicas', function (Blueprint $table)
		 {
            $table->increments('id');
            $table->string('direccionClinica');
            $table->string('comunaClinica');
            $table->integer('telefonoClinica');
            $table->string('administradorClinica');
            $table->timestamps();
  		});



	

        
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clinicas');	}

}
