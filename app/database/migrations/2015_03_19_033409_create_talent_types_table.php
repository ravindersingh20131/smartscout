<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'talent_types', function( Blueprint $t ) {
			$t->increments( 'talent_id' )->unsigned();
			$t->string( 'talent_class', 15 );
			$t->string( 'talent_description', 45 ); //change to text field since its a description
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'talent_types' );
	}

}
