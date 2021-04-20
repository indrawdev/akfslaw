<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('slug');
			$table->string('en_intro')->nullable();
			$table->string('id_intro')->nullable();
			$table->string('en_title');
			$table->string('id_title');
			$table->text('en_content');
			$table->text('id_content');
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
		Schema::dropIfExists('profiles');
	}
}
