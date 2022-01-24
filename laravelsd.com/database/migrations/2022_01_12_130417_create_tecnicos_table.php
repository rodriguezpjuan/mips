<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTecnicosTable extends Migration {

	public function up()
	{
		Schema::create('tecnicos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tec_ci', 15)->index();
			$table->string('tec_nombre', 150);
			$table->string('tec_correo', 90)->nullable();
			$table->boolean('tec_activo')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('tecnicos');
	}
}