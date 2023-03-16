<?php
class Admin extends Controller{

    public function index(){

        $user = $this->load_model("User");
		$user_data=$user->check_login(true,["admin"]);
        if(is_object($user_data)){
            $data['user_data']=$user_data;
        }
        $data['Page_title']="Admin";
       $this-> view('admin/index',$data);
    }
    public function categories(){

        $user = $this->load_model("User");
		$user_data=$user->check_login(true,["admin"]);
        if(is_object($user_data)){
            $data['user_data']=$user_data;
        }
        $data['Page_title']="Admin";
       $this-> view('admin/categories',$data);
    }
}
?>