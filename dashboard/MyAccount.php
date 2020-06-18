<?php
/**
 * Created by PhpStorm.
 * User: dannexdaniels
 * Date: 6/18/20
 * Time: 9:00 PM
 */

require_once '../system/MyDb.php';
require_once '../system/Outputs.php';

class MyAccount extends Outputs
{
    private $database;

    function __construct() {
        $this->database = new MyDb();
        $this->database->dbConnect();
    }

    public function __destruct() {
        $this->database->dbDisConnect();
    }

    public function allUsers(){
        //print_r($this->database->getAllUsers());
        return $this->database->getAllUsers();
    }

    public function setWallet($wallet){
        $this->database->setWalletId($wallet);
    }

}