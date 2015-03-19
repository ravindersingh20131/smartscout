<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'tags', function( Blueprint $t ) {
			
			$t->increments( 'tag_id' )->unsigned();
			$t->integer( 'post_id' )->unique()->unsigned();
			$t->foreign( 'post_id' )->references( 'post_id' )->on( 'user_post' );
			$t->integer( 'my_id' )->unsigned();
			$t->foreign( 'my_id' )->references( 'my_id' )->on( 'user_post' );
			$t->string( 'name', 255 );

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'tags' );
	}

}
