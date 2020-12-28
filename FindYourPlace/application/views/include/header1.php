
<!DOCTYPE html>

<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FIND YOUR PLACE | Home page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico  the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/normalize.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/fontello.css">
        <link href="<?=base_url()?>asset/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?=base_url()?>asset/assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="<?=base_url()?>asset/assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="<?=base_url()?>asset/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/price-range.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/wizard.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/lightslider.min.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/style.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/assets/css/responsive.css">
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->


        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>asset/assets/img/logo1.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <a href="<?=base_url()?>Logout/user_logout"><button class="navbar-btn nav-button wow bounceInRight login"  data-wow-delay="0.4s">Logout</button></a>

                        
                    </div> 

                    <ul class="main-nav nav navbar-nav navbar-right">

                        <li class="wow fadeInDown " data-wow-delay="0.1s">
                            <a href="<?=base_url()?>Findplace" class=" active">Home</a>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?=base_url()?>Wproperties/properties">Properties</a></li>

                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?=base_url()?>Findplace/contact">Contact</a></li>

                        <?php if(!empty($head)){ echo  '<li class="wow fadeInDown" data-wow-delay="0.4s"><a href="'.base_url().'Findplace/all-requests">My Reqsuests</a></li>' ; } ?>


                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>