
        <!-- End of nav bar -->

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
 
                    <div class="item"><img src="<?=base_url()?>asset/assets/img/slide1/slider-image-2.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="<?=base_url()?>asset/assets/img/slide1/slider-image-1.jpg" alt="GTA V"></div>

                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>property Searching Just Got So Easy</h2>
                        <p>Want to get easily a suitable house? Then it’ll be the perfect website for you.</p>

                    </div>
                </div>
            </div>
        </div>

        


        <!-- property area -->
        <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Top submitted property</h2>
                        <p>Choose & book a property where you want to live. </p>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th">


                        <?php  foreach ($property as $property) {  ?>
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="<?=base_url()?>Property/index/<?=$property['id']?>" ><img src="<?=base_url()?>image/Property/<?=$property['photo']?>"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="<?=base_url()?>Property/index/<?=$property['id']?>"> <?=$property['name']?> </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> <?=$property['area']?>Sq Ft </span>
                                        <span class="proerty-price pull-right"> ৳ <?=$property['rent']?></span>
                                    </div>


                                </div>
                            </div> 

                        <?php } ?>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <div class="item-tree-icon">
                                    <i class="fa fa-th"></i>
                                </div>
                                <div class="more-entry overflow">
                                    <h5><a href="<?=base_url()?>Wproperties/properties" >CAN'T DECIDE ? </a></h5>
                                    
                                    <a href="<?=base_url()?>Wproperties/properties" ><button class="btn border-btn more-black" value="All properties " >All properties</button></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--Welcome area -->
        <div class="Welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 Welcome-entry  col-sm-12">
                        <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                            <div class="welcome_text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                        <!-- /.feature title -->
                                        <h2>Find Your Place</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div  class="welcome_services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
                                <div class="row">
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-home pe-4x"></i>
                                            </div>
                                            <h3>Any property</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-search pe-4x"></i>
                                            </div>
                                            <h3>Easy to find</h3>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 text-center">
                                        <i class="welcome-circle"></i>
                                    </div>

                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-users pe-4x"></i>
                                            </div>
                                            <h3>More Clients</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 m-padding">
                                        <div class="welcome-estate">
                                            <div class="welcome-icon">
                                                <i class="pe-7s-help2 pe-4x"></i>
                                            </div>
                                            <h3>Any help </h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


          <!-- Footer area-->
        