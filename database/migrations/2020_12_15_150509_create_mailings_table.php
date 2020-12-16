<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailingsTable extends Migration {

	public function up()
	{
		Schema::create('mailings', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('sender_mail', 30);
		});
	}

	public function down()
	{
		Schema::drop('mailings');
	}
}