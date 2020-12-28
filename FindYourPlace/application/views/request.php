<!-- End of nav bar -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Welcome to <?=$proper[0]['p_name']?></h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-2">
                        <div class="">
                            <div class="row">
                                <div class="light-slide-item">            
                                    <div class="clearfix">
                                        <div class="favorite-and-print">
                                            <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                                <i class="fa fa-star-o"></i>
                                            </a>
                                            <a class="printer-icon " href="javascript:window.print()">
                                                <i class="fa fa-print"></i> 
                                            </a>
                                        </div> 

                                        <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                            <li data-thumb="<?=base_url()?>image/Property/<?=$proper[0]['p_photo']?>"> 
                                                
                                                <img class="img-fluid" src="<?=base_url()?>image/Property/<?=$proper[0]['p_photo']?>">
                                            </li>
                                           <?php if($proper[0]['p_id']==3){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b3.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b3.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w3.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w3.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g3.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g3.jpg" />
                                            </li>
                                            '; } 

                                            else if($proper[0]['p_id']==4){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b4.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b4.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w4.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w4.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g4.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g4.jpg" />
                                            </li>
                                            '; }

                                            else if($proper[0]['p_id']==5){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b5.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b5.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w5.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w5.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g5g5.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g5g5.jpg" />
                                            </li>
                                            '; }

                                            else if($proper[0]['p_id']==6){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b6.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b6.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/b6b6.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b6b6.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w6.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w6.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w6w6.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w6w6.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g6.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g6.jpg" />
                                            </li>
                                            '; }

                                            else if($proper[0]['p_id']==7){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b7.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b7.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w7.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w7.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g7.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g7.jpg" />
                                            </li>
                                            '; }

                                            else if($proper[0]['p_id']==8){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b8.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b8.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w8.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w8.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g8.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g8.jpg" />
                                            </li>
                                            '; }

                                            else if($proper[0]['p_id']==9){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b9.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b9.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w9.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w9.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g9.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g9.jpg" />
                                            </li>
                                            '; }

                                            else if($proper[0]['p_id']==10){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b10.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b10.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w10.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w10.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g10.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g10.jpg" />
                                            </li>
                                            '; }

                                            else if($proper[0]['p_id']==11){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b11.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b11.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/b11b11.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b11b11.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w11.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w11.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w11w11.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w11w11.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g11.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g11.jpg" />
                                            </li>
                                            '; }

                                            else if($proper[0]['p_id']==12){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b12.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b12.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/b12b12.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b12b12.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w12.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w12.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g12.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g12.jpg" />
                                            </li>
                                            '; }

                                            else if($proper[0]['p_id']==13){ 
                                            echo '<li data-thumb="'.base_url().'asset/assets/img/property-1/b13.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/b13.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/w13.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/w13.jpg" />
                                            </li>
                                            <li data-thumb="'.base_url().'asset/assets/img/property-1/g13.jpg"> 
                                                <img src="'.base_url().'asset/assets/img/property-1/g13.jpg" />
                                            </li>
                                            '; }
                                            ?>                                         
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-property-wrapper">

                                <div class="section">
                                    <h4 class="s-property-title">Description</h4>
                                    <div class="s-property-content">
                                        <p>
                                            <?=$proper[0]['detail']?>       
                                        </p>
                                    </div>
                                </div>
                                <!-- End description area  -->

                                <div class="section additional-details">

                                  <!--  <h4 class="s-property-title">Additional Details</h4>

                                    <ul class="additional-details-list clearfix">
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Built In</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2003</span>
                                        </li>
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Parking</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">2 Or More Spaces,Covered Parking,Valet Parking</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">View</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal View,Direct ew</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront Description:</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal Front,Ocean Access</span>
                                        </li> 

                                    </ul> -->
                                </div>  
                                <!-- End additional-details area  -->

                                <div class="section property-features">      

                                   <!-- <h4 class="s-property-title">Features</h4>                            
                                     <ul>
                                        <li><a >Swimming Pool</a></li>   
                                        <li><a >3 Stories</a></li>
                                        <li><a >Central Cooling</a></li>
                                        <li><a >Jog Path 2</a></li>
                                        <li><a >2 Lawn</a></li>
                                        <li><a >Bike Path</a></li>
                                    </ul>-->

                                </div> 
                                <!-- End features area  -->

                                
                                
                            </div>
                        </div>

                        
                    </div>

                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right property-style2">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <div class="inner-wrapper">
                                        <div class="single-property-header">                                          
                                            <h1 class="property-title"><?=$proper[0]['p_name']?></h1>
                                            <span class="property-price">$<?=$proper[0]['rent']?></span>
                                        </div>

                                        <div class="property-meta entry-meta clearfix ">   

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-tag">                                                                                      
                                                    <img src="<?=base_url()?>asset/assets/img/icon/sale-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Status</span>
                                                    <span class="property-info-value"><?php if($proper[0]['status']==1){ echo 'For Rent'; }else{ echo 'Not For Rent'; } ?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info icon-area">
                                                    <img src="<?=base_url()?>asset/assets/img/icon/room-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Area</span>
                                                    <span class="property-info-value"><?=$proper[0]['area']?><b class="property-info-unit">Sq Ft</b></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bed">
                                                    <img src="<?=base_url()?>asset/assets/img/icon/bed-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Bedrooms</span>
                                                    <span class="property-info-value"><?=$proper[0]['bedrooms']?></span>
                                                </span>
                                            </div>

                                            
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath">
                                                    <img src="<?=base_url()?>asset/assets/img/icon/shawer-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Bathrooms</span>
                                                    <span class="property-info-value"><?=$proper[0]['bathrooms']?></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="<?=base_url()?>asset/assets/img/icon/cars-orange.png">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Garages</span>
                                                    <span class="property-info-value"><?=$proper[0]['garages']?></span>
                                                </span>
                                            </div>

                                            


                                        </div>
                                        <div class="dealer-section-space">
                                            <span>Landlord information</span>
                                        </div>
                                        <div class="clear">
                                            <div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                     <img src="<?=base_url()?>image/<?=$proper[0]['photo']?>" class="img-circle">
                                                </a>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name">
                                                    <a href=""><?=$proper[0]['u_name']?></a>
                                                    </br>
                                                    <span>Landlord</span>        
                                                </h3>
                                                <div class="dealer-social-media">
                                                    <a class="twitter" target="_blank" href="">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a class="facebook" target="_blank" href="">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                                </div>
                                                

                                            </div>
                                        </div>

                                        <div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                <li><i class="pe-7s-map-marker strong"> </i><?=$proper[0]['thana']?>, <?=$proper[0]['division']?></li>
                                                <li><i class="pe-7s-mail strong"> </i><?=$proper[0]['email']?></li>
                                                <li><i class="pe-7s-call strong"> </i><?=$proper[0]['mobile']?></li>
                                            </ul>
                                            <p>Without any emergencies, don't call please....</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                                <div class="panel-body search-widget">
                                    <fieldset >
                                            
                                                <div class="col-xs-12"> 

                                                   <?=$this->session->flashdata('success')?> 
                                                    
                                                </div>  
                                            
                                        </fieldset>
                                </div>
                            </div>


                            

                        </aside>
                    </div>

                </div>

            </div>
        </div>

        <!-- Footer area-->