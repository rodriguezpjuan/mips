<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration {

	public function up()
	{
		Schema::create('clientes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('cli_rif', 10)->nullable()->index();
			$table->string('cli_nombre', 150)->unique();
			$table->string('cli_dir', 255);
			$table->string('cli_telf1', 50)->nullable();
			$table->string('cli_telf2', 50)->nullable();
			$table->string('cli_correo1', 90)->nullable();
			$table->string('cli_correo2', 90)->nullable();
			$table->tinyInteger('cli_tipo')->nullable()->default('0');
			$table->string('cli_foto', 250)->nullable();
			$table->boolean('cli_activo')->nullable()->default(1);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('clientes');
	}
}