<?php
include ("../template/header.php");

require_once 'Authentication.php';

if (!empty($_POST)):
    $auth = new Authentication();
    $auth->registerUser($_POST);
endif;

?>
<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputName">First name</label>
                            <input class="form-control" name="fname" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputLastName">Last name</label>
                            <input class="form-control" name="lname" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" name="uname" type="text" aria-describedby="emailHelp" placeholder="Enter User Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email"  required>
                </div>
                <div class="form-group">
                    <label for="country">Enter Country</label>
                   <input class="form-control" name="country" type="text" aria-describedby="emailHelp" placeholder="Enter Country"  required>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" name="pass" type="password" placeholder="Password"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleConfirmPassword">Confirm password</label>
                            <input class="form-control" name="conf_pass" type="password" placeholder="Confirm password" required>
                        </div>
                    </div>
                </div>
                <input type="submit" name="register" value="Register" class="btn btn-primary btn-block"/>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="login.php">Login Page</a>
                <a class="d-block small" href="forgot_password.php">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>

<?php
include ("../template/ending.php");
?>