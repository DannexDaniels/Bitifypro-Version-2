<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/11/20
 * Time: 8:45 PM
 */

require 'Outputs.php';
class MyDb
{
    private $connect;
    private $output;

    function __construct()
    {

        $this->output = new Outputs();
    }

    public function dbConnect(){
        $host_name = "127.0.0.1";
        $db_username = "root";
        $db_password = "";
        $db_name = "bitffy";

        $this->connect = mysqli_connect($host_name, $db_username, $db_password, $db_name);


        if (!$this->connect) {
            $this->output->debug_to_console("Error: Unable to connect to MySQL.");
            $this->output->debug_to_console("Debugging errno: " . mysqli_connect_errno());
            $this->output->debug_to_console("Debugging error: " . mysqli_connect_error());
            exit;
        } else {
            $this->output->debug_to_console("Connection success");
        }

        return $this->connect;
    }

    public function dbDisConnect(){
       mysqli_close($this->connect);
       $this->output->debug_to_console("Connection Disconnected");
    }

    public function addUser($user){

        $sql = "INSERT INTO users (f_name, l_name, username,email,country,password) VALUES ('".$user['fname']."', '".$user['lname']."', '".$user['uname']."', '".$user['email']."', '".$user['country']."', '".$user['pass']."')";

        if (mysqli_query($this->connect, $sql)) :
            $user = array(
                'username' => $user['uname'],
                'email' => $user['email']
            );
            if ($this->output->sendMail("registration",$user))
                $this->output->alert("Account has been created successfully","login.php");
            else
                $this->output->alert("Something is wrong...");
            exit();
        elseif (mysqli_errno($this->connect) == 1062) :
            $this->output->alert("The username or email address is already being used by someone else...");
        else:
            $this->output->alert("There was a problem registering you. kindly try again or contact us if the problem persists...");
        endif;
    }

    public function findUser($user){
        $sql = "SELECT * FROM users WHERE username = '".$user."'";

        $result = mysqli_query($this->connect, $sql);

        //print_r("query is ".$sql." which gave this result".$result);

        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return array();
        }
    }

    public function getAllUsers(){

        $sql = "SELECT * FROM users";

        $result = mysqli_query($this->connect, $sql);

        return $result;
    }

    public function setWalletId($data){
        $sql = "UPDATE users SET walletid='".$data['wallet']."' WHERE username='".$data['username']."'";

        if (mysqli_query($this->connect, $sql)):
            $this->output->alert( "Wallet has been set successfully","../dashboard/profile.php");
        else:
            $this->output->alert("Error updating record: " . mysqli_error($this->connect));
        endif;

    }
}

