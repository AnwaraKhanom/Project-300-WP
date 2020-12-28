<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Landlord</title>
        <link href="<?=base_url()?>asset/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?=base_url()?>Landlord">Landlord Panel</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>


            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                  
                </div>
            </form>
            <!-- Navbar-->
            <a class="navbar" style="color:white;"><?=$this->session->userdata('username')?></a>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?=base_url()?>Logout/landlord_logout">Logout</a>
                </li>
            </ul>

        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?=base_url()?>Landlord">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">PAGES</div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArea" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                Property
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseArea" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Landlord/add-property">Add Property</a>
                                </nav>
                            </div>

                            <div class="collapse" id="collapseArea" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Landlord/view-property">View Property</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBook" aria-expanded="false" aria-controls="collapseArea">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                                Bookings
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseBook" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?=base_url()?>Landlord/view-request">Bookings Request</a>
                                    <a class="nav-link" href="<?=base_url()?>Landlord/view-booking">View Bookings</a>
                                </nav>
                            </div>


                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Landlord(<?=$this->session->userdata('username')?>)
                    </div>
                </nav>
            </div>