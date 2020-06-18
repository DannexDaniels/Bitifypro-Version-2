<?php
include ('../template/header.php');
include ('../template/navigation.php')
?>
    <script>
        $bitUrl = "";
        function packageSelected(pkg, value) {
            $bitUrl = "https://blockchain.info/tobtc?currency=usd&value="+value;
            document.cookie = "url = "+$bitUrl;
            alert(document.cookie);
            <?php
            $bitcoin = "";
            if (!empty($_COOKIE['url'])){
                $url = $_COOKIE['url'];
                $bitcoin = file_get_contents($url);
            }

            $walletid = 'sdfsfsf4345j3l54jl345j34j53j53534j53lj53l5';

            $hidden = ['bitcoins' => $bitcoin, 'wallet' => $walletid];
            ?>
            document.getElementById('pkgPrice').textContent="You have selected a "+pkg+" package of $"+value+" (<?php echo $bitcoin?>BTC)";
        }
    </script>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Home</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <center>
                    <h1> Select a Package</h1>
                </center>

                <h3><b>Bronze Package</b></h3>
                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger
                         o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bitcoin"></i>
                                </div>
                                <div class="mr-5">$10</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#buypackage" onclick="packageSelected('Bronze','10')">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bitcoin"></i>
                                </div>
                                <div class="mr-5">$20</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#buypackage" onclick="packageSelected('Bronze',20)">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bitcoin"></i>
                                </div>
                                <div class="mr-5">$40</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#buypackage" onclick="packageSelected('Bronze',40)">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bitcoin"></i>
                                </div>
                                <div class="mr-5">$60</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#buypackage" onclick="packageSelected('Bronze',60)">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                            </a>
                        </div>
                    </div>
                </div>

                <h3><b>Silver Package</b></h3>
                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-secondary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bitcoin"></i>
                                </div>
                                <div class="mr-5">$100</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#buypackage" onclick="packageSelected('Silver',100)">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-secondary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bitcoin"></i>
                                </div>
                                <div class="mr-5">$200</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#buypackage" onclick="packageSelected('Silver',200)">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-secondary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bitcoin"></i>
                                </div>
                                <div class="mr-5">$400</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#buypackage" onclick="packageSelected('Silver',400)">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                            </a>
                        </div>
                    </div>

                </div>

                <h3><b>Gold Package</b></h3>
                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bitcoin"></i>
                                </div>
                                <div class="mr-5">$600</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#buypackage" onclick="packageSelected('Gold',600)">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bitcoin"></i>
                                </div>
                                <div class="mr-5">$800</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#buypackage" onclick="packageSelected('Gold',800)">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-bitcoin"></i>
                                </div>
                                <div class="mr-5">$1000</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#buypackage" onclick="packageSelected('Gold',1000)">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Logout Modal-->
        <div class="modal fade" id="buypackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <?php

                //convert usd to bitcoins
                //$url = "https://blockchain.info/tobtc?currency=usd&value=10";


                /*echo form_open('/account','',$hidden)*/?>

                <form action="" method="post">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Fanstastic!!</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center id="pkgPrice">selected package</center><br/>
                            <div class="form-group">
                                <label for="username">Send this bitcoins</label>
                                <input class="form-control" name="bitcoins" value="<?php echo $bitcoin; ?>" type="text" aria-describedby="emailHelp" placeholder="Enter User Name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">To this wallet</label>
                                <input class="form-control" name="wallet" value="<?php echo $url;?>" type="text" aria-describedby="emailHelp" placeholder="Enter email"  required disabled>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="register" value="Buy Package" class="btn btn-primary btn-block" href="login.html">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php
include ('../template/footer.php');
include ('../template/ending.php')
?>