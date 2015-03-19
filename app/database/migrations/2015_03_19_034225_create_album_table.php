<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'album', function( Blueprint $t ) {

			$t->increments( 'album_id' )->unique()->unsigned();
			$t->integer( 'my_id' )->unique()->unsigned();
			$t->foreign( 'my_id' )->references( 'my_id' )->on( 'users' );
			$t->string( 'name', 255 );
			$t->smallInteger( 'visibility' );
			$t->dateTime( 'created_on' );
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('album', function( $t ) {
			$t->dropForeign( 'album_my_id_foreign' );
		});
		
		Schema::drop( 'album' );
	}

}
