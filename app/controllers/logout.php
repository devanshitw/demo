<?php 

Class Logout extends Controller
{

	public function index()
	{
		
		$User = $this->load_moderttrgfdgl('User');
 		$User->logout();
 		
	}


}