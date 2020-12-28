
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Add Property</h2></div>
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

                                                            <option value="<?=$THANA['id']?>" <?php if(set_value('thana_id')==$THANA['id']) { echo 'selected'; } ?> ><?=$THANA['thana']?></option>
                                                        
                                                            <?php } ?>

                                                        </select>


                                                     </div>
                                                     <div class="error"><?=form_error('thana')?></div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" name="name" class="form-control py-4" value="<?=set_value('name')?>" placeholder="Enter Name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('name')?></div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Address</label>
                                                        <input type="text" name="address" class="form-control py-4" value="<?=set_value('address')?>" placeholder="Enter Address"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('address')?></div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Area</label>
                                                        <input type="text" name="area" class="form-control py-4" value="<?=set_value('area')?>" placeholder="Enter Area in Sq Ft"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('area')?></div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Bedrooms</label>
                                                        <input type="text" name="bedroom" class="form-control py-4" value="<?=set_value('bedroom')?>" placeholder="Enter Bedroom Numbers"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('bedroom')?></div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Bathrooms</label>
                                                        <input type="text" name="bathroom" class="form-control py-4" value="<?=set_value('bathroom')?>" placeholder="Enter Bathroom Numbers"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('bathroom')?></div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Garages</label>
                                                        <input type="text" name="garage" class="form-control py-4" value="<?=set_value('garage')?>" placeholder="Enter Garage Numbers"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('garage')?></div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Details</label>
                                                        <input type="text" name="detail" class="form-control py-4" value="<?=set_value('detail')?>" placeholder="Enter Details"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('detail')?></div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Rent</label>
                                                        <input type="text" name="rent" class="form-control py-4" value="<?=set_value('rent')?>" placeholder="Enter Rent Fee"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="error"><?=form_error('rent')?></div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Availability</label> <br>  
                                                        <input type="radio" name="status" value="1"   <?php if(set_value('status')=='1') { echo 'checked'; }?> > Yes

                                                        <input type="radio" name="status"  value="0"   <?php if(set_value('status')=='0') { echo 'checked'; }?> > No
                                                    </div>
                                                    <div class="error"><?=form_error('status')?></div>

                                                    <div class="form-group"> 
                                                        <label for="">Property Image</label>
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
                
    
            