<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'user_profile', function( Blueprint $t ) {
			
			$t->increments( 'profile_id' )->unsigned();
			$t->integer( 'my_id' )->unique()->unsigned();
			$t->foreign( 'my_id' )->references( 'my_id' )->on( 'users' );
			$t->smallInteger( 'height' )->unsigned();
			$t->string( 'hair_color', 10 );
			$t->string( 'eye_color', 10 );
			$t->smallInteger( 'bust_size' )->unsigned();
			$t->smallInteger( 'waist_size' )->unsigned();
			$t->smallInteger( 'hip_size' )->unsigned();
			$t->smallInteger( 'shoe_size' )->unsigned();
			$t->string( 'ethnicity', 20 );
			$t->string( 'hair_length', 10 );
			$t->string( 'skin_color', 10 );
			$t->integer( 'cup_size' )->unsigned();
			$t->string( 'comp_type', 20 );
			$t->string( 'experience_level', 20 );
			$t->date( 'dob' );
			$t->smallInteger( 'weight' )->unsigned();
			$t->string( 'gender', 15 );
			$t->string( 'city', 45 );
			$t->string( 'state', 45 );
			$t->smallInteger( 'zip' );
			$t->string( 'country', 45 );
			$t->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_profile');
	}

}
