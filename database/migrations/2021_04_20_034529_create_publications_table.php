<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publications', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('description');
			$table->string('thumbnail');
			$table->string('file');
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
		Schema::dropIfExists('publications');
	}
}
