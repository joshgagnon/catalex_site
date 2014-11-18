<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultsAndConstraints extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("ALTER TABLE `users` CHANGE COLUMN `plaintext_pw` `plaintext_pw` VARCHAR(255) DEFAULT NULL;");
		DB::statement("ALTER TABLE `users` ADD CONSTRAINT `username_unique` UNIQUE (username)");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
