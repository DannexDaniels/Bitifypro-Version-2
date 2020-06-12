<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url('dashboard')?>">Bitify Pro Dashboard</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
                <a class="nav-link" href="<?php echo base_url('dashboard')?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Home</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My_Account">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapse_account" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">My Account</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapse_account">
                    <li>
                        <a href="<?php echo base_url('subscriptions')?>"><i class="fa fa-fw fa-dollar"></i> Subscriptions</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('referrals')?>"><i class="fa fa-fw fa-users"></i> Referrals</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('profile')?>"><i class="fa fa-fw fa-user-circle"></i> Profile</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transactions">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapse_transaction" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-history"></i>
                    <span class="nav-link-text">Transaction History</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapse_transaction">
                    <li>
                        <a href="<?php echo base_url('earnings')?>"><i class="fa fa-fw fa-money"></i> Earnings</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('withdrawals')?>"><i class="fa fa-fw fa-tasks"></i> Withdrawals</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Withdraw">
                <a class="nav-link" href="<?php echo base_url('withdraw')?>">
                    <i class="fa fa-fw fa-google-wallet"></i>
                    <span class="nav-link-text">Withdraw</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <!--show there is new notification -->
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">Notifications:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fa fa-fw fa-user-circle"></i>#Username</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fa fa-fw fa-bitcoin"></i>#Coins Earned</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fa fa-fw fa-dollar"></i>#Cash Earned</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>