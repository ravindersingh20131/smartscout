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

		View::share('title', 'Login Page');
		View::make( 'login' )->with('title', 'Login page!');
		//return $this->layout->content = "login page";
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