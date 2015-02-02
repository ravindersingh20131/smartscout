<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
		//$adminGroup = Sentry::findGroupById(1);

		//create leo's user
		$user = Sentry::createUser(array(
    	    'email'     => 'ghost@smartscout.me',
    	    'password'  => 'c00kies2000',
    	    'activated' => true,
    	    'first_name' => 'Leo',
    	    'username' => 'humse'
    	));

		/*if( !$adminGroup )
			$user->addGroup($adminGroup);*/

		$user->save();

    	//create Hamilton's user
    	$user = Sentry::createUser(array(
    	    'email'     => 'hdaza@smartscout.me',
    	    'password'  => 'c00kies',
    	    'activated' => true,
    	    'first_name' => 'Hamilton'
    	));

    	/*if( !$adminGroup )
    		$user->addGroup( $adminGroup );*/

    	$user->save();

		
	}

}
