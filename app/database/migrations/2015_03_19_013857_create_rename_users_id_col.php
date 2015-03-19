<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenameUsersIdCol extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table( 'users', function( Blueprint $t ) {
			$t->renameColumn( 'id', 'my_id' );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table( 'users', function( $t ) {
			$t->renameColumn( 'my_id', 'id' );
		});
	}

}
