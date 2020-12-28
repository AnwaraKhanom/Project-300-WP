

        <!-- End of nav bar -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Find Your suitable Property here</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                     
                <div class="col-md-3 p0 padding-top-40">
                    <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                            <div class="panel-heading">
                                <h3 class="panel-title">Smart search</h3>
                            </div>
                            <form action="" method="post" >
                                    <div class="panel-body search-widget"> 
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-xs-12">
                                                <input type="text" name="Division" class="get_division form-control" placeholder="Division">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-xs-6">

                                                <input type="text" name="Thana" class="get_thana form-control" placeholder="Thana">
                                            </div>
                                            <div class="form-group col-xs-6">

                                                <input type="text" name="Price" class="get_price form-control" placeholder="Price">  

                                                
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="form-group col-xs-6">
                                                <input type="text"  name="Area" class="get_area form-control" placeholder="Area">                                                
                                            </div>
                                            <div class="form-group col-xs-6">
                                                <input type="text"  name="Bedrooms" class="get_bed form-control" placeholder="Bedrooms">                                                
                                            </div>                                            
                                        </div>
                                    </fieldset>                                

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="form-group col-xs-6">
                                                <input type="text"  name="Washrooms"  class="get_wash form-control" placeholder="Washrooms">                                                
                                            </div>

                                            <div class="form-group col-xs-6">
                                                <input type="text"  name="Garages"  class="get_gar form-control" placeholder="Garages">

                                            </div>
                                        </div>
                                    </fieldset>

                                    

                                    <fieldset >
                                        <div class="row">
                                           <!--  <div class="form-group col-xs-12">  
                                                <input type="button" class="btn largesearch-btn" onclick="get_result()" value="Search" >
                                            </div> -->

                                            <div class="form-group col-xs-12">  
                                                <input type="submit" name="submit" class="btn largesearch-btn"  value="Search" >
                                            </div>    
                                        </div>
                                    </fieldset>

                                    </form>

                            </div>
                        </div>



                        <fieldset >
                            <div class="col-xs-12 our_result">
                                  
                                    
                                 
                            </div>
                         </fieldset>


                       
                    </div>
                </div>

                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear"> 
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <li class="active">
                                    
                                </li>
                                <li class="">
                                    
                                </li>
                            </ul><!--/ .sort-by-list-->

                            <div class="items-per-page">
                                
                            </div><!--/ .items-per-page-->
                        </div>

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                        </div><!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 clear"> 
                        <div id="list-type" class="proerty-th">
                            <?php  foreach ($property as $property) {  ?>
                                <div class="col-sm-6 col-md-4 p0">
                                        <div class="box-two proerty-item">
                                            <div class="item-thumb">
                                                <a href="<?=base_url()?>Property/index/<?=$property['id']?>" ><img src="<?=base_url()?>image/Property/<?=$property['photo']?>"></a>
                                            </div>

                                            <div class="item-entry overflow">
                                                <h5><a href="<?=base_url()?>Property/index/<?=$property['id']?>"> <?=$property['name']?> </a></h5>
                                                <div class="dot-hr"></div>
                                                <span class="pull-left"><b> Area :</b> <?=$property['area']?>Sq Ft </span>
                                                <span class="proerty-price pull-right"> ৳ <?=$property['rent']?></span>
                                                <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                                <div class="property-icon">
                                                    <img src="<?=base_url()?>asset/assets/img/icon/bed.png"><?=$property['bedrooms']?>|
                                                    <img src="<?=base_url()?>asset/assets/img/icon/shawer.png"><?=$property['bathrooms']?>|
                                                    <img src="<?=base_url()?>asset/assets/img/icon/cars.png"><?=$property['garages']?>  
                                                </div>
                                            </div>


                                        </div>
                                    </div> 

                                    

                                <?php } ?>
                                
                                 
                        </div>
                    </div>
                    
                    <div class="col-md-12"> 
                        <div class="pull-right">
                          
                            <div class="pagination">
                                <ul>
                                    <?=$this->pagination->create_links()?>   
                                </ul>
                            </div>
                        </div>                
                    </div>
                </div>  
                </div>              
            </div>
        </div>

          <!-- Footer area-->
       
