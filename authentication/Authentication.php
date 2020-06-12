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
        print_r($email);
    }

    public function registerUser($user){
        if ($user['pass']!=$user['conf_pass']):
            $this->alert("Password and Confirmation password do not match");
        else:
            $this->database->addUser($user);
        endif;
    }


}