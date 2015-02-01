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
    	    'password'  => Hash::make('ghost123'),
    	    'activated' => true,
    	    'first_name' => 'Leo',
    	    'username' => 'humse'
    	));

		/*if( !$adminGroup )
			$user->addGroup($adminGroup);*/

		$user->save();

    	//create Sunli's user
    	$user = Sentry::createUser(array(
    	    'email'     => 'hdaza@smartscout.me',
    	    'password'  => Hash::make('hdaza123'),
    	    'activated' => true,
    	    'first_name' => 'Hamilton'
    	));

    	/*if( !$adminGroup )
    		$user->addGroup( $adminGroup );*/

    	$user->save();

		
	}

}
