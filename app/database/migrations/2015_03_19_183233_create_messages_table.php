<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'messages', function( Blueprint $t ) {

			$t->increments( 'message_id' )->unsigned();
			$t->integer( 'sender_my_id' )->unique()->unsigned();
			$t->foreign( 'sender_my_id' )->references( 'id' )->on( 'users' );
			$t->integer( 'recipient_my_id' )->unique()->unsigned();
			$t->foreign( 'recipient_my_id' )->references( 'id' )->on( 'users' );
			$t->longText( 'body' );
			$t->string( 'message_type', 255 );
			$t->string( 'subject', 255 );
			$t->dateTime( 'created_on' );
			$t->string( 'status', 15 );

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'messages' );
	}

}
