<?php
/*
user controller should call the user model's methods to get the data ready to be passed to the view. The controller shouldn't perform any changes to the data, but it should test it to get the necessary action done properly.
*/
include('classes/models/user_model.php');


class User_Controller{
	
	private $user_model;
    private $user_data;

    public function __construct(){
     
        $this->user_model = new User_Model();
        $this->user_data = array();


    }

    function login($username,$password){

        if($this->user_model->verifyCredentials($username,$password)){
            echo "<br>Username and Password Match!";

            $result = $this->user_model->getUser($username);

            while($row = $result->fetch_assoc()) {

                $this->user_data['user_id'] = $row["user_id"];
                $this->user_data['username'] = $row["username"];
                $this->user_data['first_name'] = $row["first_name"];
                $this->user_data['last_name'] = $row["last_name"];
                $this->user_data['email'] = $row["email"];
            }



            echo "<pre>";
            print_r($this->user_data);
            echo "</pre>";
        }
    }

    function logout(){
        //set log out status to 0, and clear user array
    }

    function isLoggedIn()
{        //return login status
    return false;
}

function isValid($username){
        //checks whether the user is exists
       # $user_model = new User_Model();
    return $this->user_model->checkUsernameExists($username);
}

function register(){

}

function update(){
        //saves changes to database
        //copies $user_data elements into $user_model database rows
}



}