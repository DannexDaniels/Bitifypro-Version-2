<?php
include ("../template/header.php");
require_once '../dashboard/MyAccount.php';

if (!empty($_POST)):
    $account = new MyAccount();
    $account->setWallet($_POST);
endif;
?>
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">New User</div>
        <div class="card-body">
            <div class="text-center mt-4 mb-5">
                <h4>Set Wallet ID</h4>
                <p>A new user with the name <b><?php echo $_GET['uname'];?></b> has just created an account with us. Assign him a wallet ID to where they can send BitCoins to.</p>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <input class="form-control" name="username" type="text" value="<?php echo $_GET['uname'];?>" placeholder="Enter User Name" required>
                </div>
                <div class="form-group">
                    <input class="form-control" name="wallet" type="text" placeholder="Enter Wallet ID" required>
                </div>
                <input type="submit" name="setWallet" value="Set Wallet" class="btn btn-primary btn-block"/>
            </form>
        </div>
    </div>
</div>

<?php
include ("../template/ending.php");
?>