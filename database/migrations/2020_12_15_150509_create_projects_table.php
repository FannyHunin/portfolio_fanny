<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration {

	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name', 30);
			$table->string('description');
			$table->string('link');
			$table->string('src1', 60);
			$table->string('src2', 60);
			$table->string('src3', 60);
			$table->unsignedBigInteger('tags_id');
			$table->foreign('tags_id')->references('id')->on('tags');
		});
	}

	public function down()
	{
		Schema::drop('projects');
	}
}