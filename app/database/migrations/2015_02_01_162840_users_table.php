<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if( Schema::hasTable('users') ) {

			Schema::table('users', function( $t ) {
				$t->string('username')->nullable()->after('last_name');
			});

		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if( Schema::hasTable('users') ) {
			dropColumn('username');
		}
	}

}
