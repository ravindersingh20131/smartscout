<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'file', function( Blueprint $t ) {

			$t->increments( 'file_id' )->unsigned();
			$t->string( 'name', 255 );
			$t->longText( 'url' );
			//md5 col is not good practice
			$t->longText( 'data' );
			//$t->string( 'extension', 3 ); //no need for this column, laravel can get the extension from the filename
			$t->string( 'file_type', 255 );

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'file' );
	}

}
