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

        try {

            $leo = Sentry::findUserByLogin('ghost@smartscout.me');

        } catch( Cartalyst\Sentry\Users\UserNotFoundException $e ) {

            echo "User 'Leo' was not found.. Creating user...";

            //create leo's user
            $user = Sentry::createUser(array(
                'email' => 'ghost@smartscout.me',
                'password' => 'c00kies2000',
                'activated' => true,
                'first_name' => 'Leo',
                'username' => 'humse'
            ));

            /*if( !$adminGroup )
            $user->addGroup($adminGroup);*/

            $user->save();

            echo "Leo's user credentials was created!";

        }

        try {

            $hdaza = Sentry::findUserByLogin('hdaza@smartscout.me');

        } catch( Cartalyst\Sentry\Users\UserNotFoundException $e ) {

            echo "User 'Hamilton' was not found.. Creating user...";

            //create Hamilton's user
            $user = Sentry::createUser(array(
                'email' => 'hdaza@smartscout.me',
                'password' => 'c00kies',
                'activated' => true,
                'first_name' => 'Hamilton',
                'username' => 'hdaza'
            ));

            /*if( !$adminGroup )
                $user->addGroup( $adminGroup );*/

            $user->save();

            echo "Hamilton's user credentials was created!";
        }

        try {

            $ravinder = Sentry::findUserByLogin('ravinder@smartscout.me');

        } catch( Cartalyst\Sentry\Users\UserNotFoundException $e ) {

            echo "User 'Ravinder' was not found.. Creating user...";

            //create ravi's user
            $user = Sentry::createUser(array(
                'email' => 'ravi@smartscout.me',
                'password' => 'changemenow!',
                'activated' => true,
                'first_name' => 'Ravinder',
                'username' => 'ravi'
            ));

            /*if( !$adminGroup )
                $user->addGroup( $adminGroup );*/

            $user->save();

            echo "Ravinder's user credentials was created!";

        }

		
	}

}
