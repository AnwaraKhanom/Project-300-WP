
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Edit Property</h2></div>
                                    <div class="card-body">
                                        <?=$this->session->flashdata('success')?>
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <!--<?php echo $this->session->flashdata('message'); ?>-->

                                                    <!--<div class="message"></div>-->

                                                    <div class="form-group">
                                        
                                                        <label for="exampleInputEmail1">Thana</label> <br>   
                                                        <select  name="thana" class="get_division form-control" >
                                                            
                                                            <option value="">---Please Select Thana---</option>
                                                             <?php  foreach ($thana as $THANA) {  ?>

                                                            <option value="<?=$THANA['id']?>" <?php if(set_value('thana_id')==$THANA['id']) { echo 'selected'; } else if($property[0]['thana_id']==$THANA['id']){ echo 'selected'; } ?> ><?=$THANA['thana']?></option>
                                                        
                                                            <?php } ?>

                                                        </select>


                                                     </div>
                                                     <div class="error"><?=form_error('thana')?></div>

                                                    <div class="form-group">
                                                        <label class="small mb-1" for="exampleInputEmail1">Name</label>
                                                        <input type="text" name="name" class="form-control py-4" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $property[0]['name']; } ?>" placeholder="Enter Name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('name')?></div>

                                                    <div class="form-group">
                                                        <label class="small mb-1" for="exampleInputEmail1">Address</label>
                                                        <input type="text" name="address" class="form-control py-4" value="<?php if(set_value('address')){ echo set_value('address'); }else{ echo $property[0]['address']; } ?>" placeholder="Enter Address"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('address')?></div>

                                                    <div class="form-group">
                                                        <label class="small mb-1" for="exampleInputEmail1">Area</label>
                                                        <input type="text" name="area" class="form-control py-4" value="<?php if(set_value('area')){ echo set_value('area'); }else{ echo $property[0]['area']; } ?>" placeholder="Enter Area in Sq Ft"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('area')?></div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="exampleInputEmail1">Bedrooms</label>
                                                        <input type="text" name="bedroom" class="form-control py-4" value="<?php if(set_value('bedroom')){ echo set_value('bedroom'); }else{ echo $property[0]['bedrooms']; } ?>" placeholder="Enter Bedroom Numbers"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('bedroom')?></div>

                                                    <div class="form-group">
                                                        <label class="small mb-1" for="exampleInputEmail1">Bathrooms</label>
                                                        <input type="text" name="bathroom" class="form-control py-4" value="<?php if(set_value('bathroom')){ echo set_value('bathroom'); }else{ echo $property[0]['bathrooms']; } ?>" placeholder="Enter Bathroom Numbers"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('bathroom')?></div>

                                                    <div class="form-group">
                                                        <label class="small mb-1" for="exampleInputEmail1">Garages</label>
                                                        <input type="text" name="garage" class="form-control py-4" value="<?php if(set_value('garage')){ echo set_value('garage'); }else{ echo $property[0]['garages']; } ?>" placeholder="Enter Garage Numbers"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('garage')?></div>

                                                    <div class="form-group">
                                                        <label class="small mb-1" for="exampleInputEmail1">Details</label>
                                                        <input type="text" name="detail" class="form-control py-4" value="<?php if(set_value('detail')){ echo set_value('detail'); }else{ echo $property[0]['detail']; } ?>" placeholder="Enter Details"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('detail')?></div>

                                                    <div class="form-group">
                                                        <label class="small mb-1" for="exampleInputEmail1">Rent</label>
                                                        <input type="text" name="rent" class="form-control py-4" value="<?php if(set_value('rent')){ echo set_value('rent'); }else{ echo $property[0]['rent']; } ?>" placeholder="Enter Rent Fee"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('rent')?></div>
                                                    
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="exampleInputEmail1">Availability</label> <br>  
                                                        <input type="radio" name="status" value="1"   <?php if(set_value('status')=='1') { echo 'checked'; } else if($property[0]['status']=='1'){ echo 'checked'; }?> > Yes

                                                        <input type="radio" name="status"  value="0"   <?php if(set_value('status')=='0') { echo 'checked'; }else if($property[0]['status']=='0'){ echo 'checked'; }?> > No
                                                    </div>
                                                    <div class="error"><?=form_error('status')?></div>

                                                    <div class="form-group"> 
                                                        <label for="">Property Image</label>
                                                        <br>
                                                        <img width="200px;" height="200px" src="<?=base_url()?>image/Property/<?=$property[0]['photo']?>" alt="">
                                                        <br>
                                                        <input type="file" name="property_image" >
                                 
                                                    </div>

                                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"> 
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                            
                                                    </div>


                                                </form>
                                            </div>
                                </div>


                                
                                </div>
                         
                    </div>
                </main>
                
    
            