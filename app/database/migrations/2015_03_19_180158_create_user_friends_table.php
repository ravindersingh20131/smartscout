<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFriendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	 	Schema::create( 'user_friends', function( Blueprint $t ) {

	 		$t->integer( 'my_id' )->primary()->unsigned();
	 		$t->foreign( 'my_id' )->references( 'my_id' )->on( 'users' );
	 		$t->integer( 'follower_my_id' )->unique()->unsigned();
	 		$t->foreign( 'follower_my_id' )->references( 'my_id' )->on( 'users' );

	 	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'user_friends' );
	}

}
