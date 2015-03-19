<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageFileIdForeign extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table( 'image', function( $t ) {
			$t->foreign( 'file_id' )->references( 'file_id' )->on( 'file' );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table( 'image', function( $t ) {
			$t->dropForeign( 'image_file_id_foreign' );
		});
	}

}
