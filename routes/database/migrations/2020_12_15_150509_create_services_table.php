<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{

	public function up()
	{
		Schema::create('services', function (Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name', 30);
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}
