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
                print_r("Somehting si worng");
                //$this->output->alert("Something is wrong...");
            exit();
        elseif (mysqli_errno($this->connect) == 1062) :
            $this->output->alert("The username or email address is already being used by someone else...");
        else:
            $this->output->alert("There was a problem registering you. kindly try again or contact us if the problem persists...");
        endif;
    }
}

