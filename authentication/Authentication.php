<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/11/20
 * Time: 10:21 PM
 */
require_once '../system/MyDb.php';
require_once '../system/Outputs.php';

class Authentication extends Outputs
{

    private $database;

    function __construct() {
        $this->database = new MyDb();
        $this->database->dbConnect();
    }

    public function __destruct() {
        $this->database->dbDisConnect();
    }

    public function resetPass($email){
        $this->alert("module still under development");
    }

    public function registerUser($user){
        if ($user['pass']!=$user['conf_pass']):
            $this->alert("Password and Confirmation password do not match");
        else:
            $this->database->addUser($user);
        endif;
    }

    public function loginUser($user){

        $result = $this->database->findUser($user['uname']);

        if (empty($result)):
            $this->alert("User not found. Please create an account","register.php");
        elseif ($result['password'] === $user['pass']):
            $this->alert("Login successfull","../dashboard/dashboard.php");
        else:
            $this->alert("You have entered a wrong password");
        endif;

    }




}