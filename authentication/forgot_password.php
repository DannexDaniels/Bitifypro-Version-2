<?php
include ("../template/header.php");
require_once 'Authentication.php';

$auth = new Authentication();
$auth->resetPass($_POST['email']);

?>
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
            <div class="text-center mt-4 mb-5">
                <h4>Forgot your password?</h4>
                <p>Enter your email address and we will send you instructions on how to reset your password.</p>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required>
                </div>
                <input type="submit" name="resetpass" value="Reset Password" class="btn btn-primary btn-block"/>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="register.php">Register an Account</a>
                <a class="d-block small" href="login.php">Login Page</a>
            </div>
        </div>
    </div>
</div>

<?php
include ("./template/ending.php");
?>