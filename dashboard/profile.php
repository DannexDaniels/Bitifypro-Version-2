<?php
include('../template/header.php');
include('../template/navigation.php');

require_once 'MyAccount.php';

$account = new MyAccount();
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                My Account
            </li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Table Example</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Date Joined</th>
                            <th>Wallet Id</th>
                            <th>Account Verified?</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Date Joined</th>
                            <th>Wallet Id</th>
                            <th>Account Verified?</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $row = $account->allUsers();

                        while($users = mysqli_fetch_array($row, MYSQLI_ASSOC)) {
                                ?>
                            <tr>
                                <td><?php echo $users['f_name'];?></td>
                                <td><?php echo $users['l_name'];?></td>
                                <td><?php echo $users['username'];?></td>
                                <td><?php echo $users['email'];?></td>
                                <td><?php echo $users['country'];?></td>
                                <td><?php echo $users['date_joined'];?></td>
                                <td><?php echo $users['walletid'];?></td>
                                <td><?php echo $users['acc_verified'];?></td>
                            </tr>
                                <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>

<?php
include('../template/footer.php');
include('../template/ending.php')
?>