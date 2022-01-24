<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresasTable extends Migration {

	public function up()
	{
		Schema::create('empresas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('emp_rif', 10)->unique();
			$table->string('emp_nombre', 150);
			$table->string('emp_dir', 255)->nullable();
			$table->string('emp_telf', 50)->nullable();
			$table->string('emp_logo', 250)->nullable();
			$table->string('emp_correo', 90)->nullable();
			$table->string('emp_social1', 50)->nullable();
			$table->string('emp_social2', 50)->nullable();
			$table->string('emp_social3', 50)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('empresas');
	}
}