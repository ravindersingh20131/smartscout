<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTalenttypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'user_talenttype', function( Blueprint $t ) {

			$t->increments( 'talent_id' )->unsigned();
			$t->integer( 'my_id' )->unique()->unsigned();
			$t->foreign( 'my_id' )->references( 'my_id' )->on( 'users' );

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table( 'user_talenttype', function( Blueprint $t ) {
			$t->dropForeign( 'user_talenttype_my_id_foreign' );
		});

		Schema::drop( 'user_talenttype' );
	}

}
