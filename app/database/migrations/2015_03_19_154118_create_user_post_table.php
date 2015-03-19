<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'user_post', function( Blueprint $t ) {

			$t->increments( 'post_id' )->unsigned();
			$t->integer( 'my_id' )->unsigned();
			$t->foreign( 'my_id' )->references( 'my_id' )->on( 'users' );
			$t->integer( 'author_my_id' )->unique()->unsigned();
			$t->integer( 'image_id' )->unique()->unsigned();
			$t->longText( 'body' );
			$t->longText( 'description' );
			$t->string( 'subject', 255 );
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
		Schema::drop( 'user_post' );
	}

}
