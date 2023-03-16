<?php 

Class Signup extends Controller
{

	public function index()
	{

		$data['Page_title'] = "Signup";

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{eryrdf
 			
			$user = $this->load_model("User");
			$user->signup($_POST);
		}

		$this->view("signup",$data);
	}


}