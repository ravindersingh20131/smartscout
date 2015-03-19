<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'image', function( Blueprint $t ) {

			$t->increments('image_id')->unsigned();
			$t->integer( 'file_id' )->unique()->unsigned();
			$t->integer( 'my_id' )->unique()->unsigned();
			$t->integer( 'album_id' )->unique()->unsigned();
			$t->string( 'title', 255 );
			$t->smallInteger( 'visibility' )->unsigned();
			$t->dateTime('created_on');

			$t->foreign( 'file_id' )->references( 'file' )->on( 'file_id' );
			$t->foreign( 'my_id' )->references( 'my_id' )->on( 'users' );
			$t->foreign( 'album_id' )->references( 'album_id' )->on( 'album' );

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('image', function( $t ) {
			$t->dropForeign( 'image_file_id_foreign' );
			$t->dropForeign( 'image_my_id_foreign' );
			$t->dropForeign( 'image_album_id_foreign' );
		});

		Schema::drop( 'image' );
	}

}
