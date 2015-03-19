<?php

/**
 * Class Reading
* The Reading controller.
*/
class Communication extends Controller
{
	/**
	 * Construct this object by extending the basic Controller class
	 */
	public function __construct()
	{
		parent::__construct();

		// VERY IMPORTANT: All controllers/areas that should only be usable by logged-in users
		// need this line! Otherwise not-logged in users could do actions. If all of your pages should only
		// be usable by logged-in users: Put this line into libs/Controller->__construct
		Auth::handleLogin();
	}

	/**
	 * This method controls what happens when you move to /note/index in your app.
	 * Gets all notes (of the user).
	 */
	public function index()
	{
		$this->view->render('communication/index');
	}

	 
}
