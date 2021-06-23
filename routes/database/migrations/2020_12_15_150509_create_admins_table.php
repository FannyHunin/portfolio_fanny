<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration {

	public function up()
	{
		Schema::create('admins', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name', 30);
			$table->string('email', 60);
			$table->string('password', 15);
		});
	}

	public function down()
	{
		Schema::drop('admins');
	}
}