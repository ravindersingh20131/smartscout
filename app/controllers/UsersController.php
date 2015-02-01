<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Handle user login
	 *
	 * @return Response
	 */
	public function login() {

		return View::make( 'login' )->with('title', 'Login page!');
		//return $this->layout->content = "login page";
		
	}

	/**
	 * Processes user login
	 * 
	 * @return Illuminate\Routing\Redirector
	 */
	public function processLogin() {

		// validate the info, create rules for the inputs
		$rules = array(
			'loginEmail' => 'required|email', // make sure the email is an actual email
			'loginPass' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) 
		{

			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('loginPass')); // send back the input (not the password) so that we can repopulate the form
		} 
		else 
		{
			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('loginEmail'),
				'password' 	=> Input::get('loginPass')
			);

			//for "remember me" checkbox
			$remember = false;

			//if checkbox is checked, name wont equal null
			if(Input::get('remember_user') !== NULL)
			{
				$remember = true;
			}

			// attempt to do the login
			if (Sentry::authenticate($userdata, $remember)) 
			{

			
				// validation successful!
				// redirect them to the dashboard section
				return Redirect::to('dashboard');
				// for now we'll just echo success (even though echoing in a controller is bad)
				//echo 'SUCCESS!';

			} 
			else 
			{	 
				//echo "failed!";	
				// validation not successful, send back to form	
				return Redirect::to('login')->with('flash_message', 'Login failed!');

			}
		}

	}

	/**
	 * Handle user logout
	 *
	 * @return Response
	 */
	public function logout() {
		
		View::share('title', 'Logout Page');

		//return $this->layout->content = "logout page";
	}

	/**
	 * Handle user registration
	 *
	 * @return Response
	 */
	public function register() {
		
		View::share('title', 'Registration Page');

		//return $this->layout->content = "registration page";
	}

	/**
	 * Handle user dashboard
	 *
	 * @return Response
	 */
	public function dashboard() {
		return View::make('user.dashboard')->with('title', 'Dashboard Page');
	}

}