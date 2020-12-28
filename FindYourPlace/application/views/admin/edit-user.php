<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="col-md-6 offset-3">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Edit User</h2></div>
                        <div class="card-body">
                            <?=$this->session->flashdata('success')?>
                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $user[0]['name']; } ?>" placeholder="Enter Name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="error"><?=form_error('name')?></div>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" name="email" class="form-control" value="<?php if(set_value('email')){ echo set_value('email'); }else{ echo $user[0]['email']; } ?>" placeholder="Enter Email"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="error"><?=form_error('email')?></div>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" name="mobile" class="form-control" value="<?php if(set_value('mobile')){ echo set_value('mobile'); }else{ echo $user[0]['mobile']; } ?>" placeholder="Enter Mobile"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="error"><?=form_error('mobile')?></div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea name="address" class="form-control"><?php if(set_value('address')){ echo set_value('address'); }else{ echo $user[0]['address']; } ?></textarea>            
                                </div>
                                <div class="error"><?=form_error('address')?></div>

                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" value="<?php if(set_value('password')){ echo set_value('password'); }else{ echo $user[0]['password']; } ?>" placeholder="Enter Password"  id="exampleInputPassword1">
                                </div>
                                <div class="error"><?=form_error('password')?></div>
                                  
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Verify Password</label>
                                    <input type="password" name="verify_password"  class="form-control" value="<?php if(set_value('verify_password')){ echo set_value('verify_password'); }else{ echo $user[0]['password']; } ?>" placeholder="Enter Verify password"  id="exampleInputPassword1">
                                </div>
                                <div class="error"><?=form_error('verify_password')?></div>

                                <div class="form-group">
                                <label for="exampleInputPassword1">Register as a </label>   
                                <input type="radio" name="type" value="landlord"    <?php if(set_value('type')=='landlord') { echo 'checked'; }elseif($user[0]['type']=='landlord') { echo 'checked'; }?> > Landlord

                                <input type="radio" name="type" value="tenant"    <?php if(set_value('type')=='tenant') { echo 'checked'; }elseif($user[0]['type']=='tenant') { echo 'checked'; }?> > Tenant
                                </div>
                                <div class="error"><?=form_error('type')?></div>

                                <div class="form-group"> 
                                    <label for="">Photo</label>
                                    <br>
                                    <img width="200px;" height="200px" src="<?=base_url()?>image/<?=$user[0]['photo']?>" alt="">
                                    <br>
                                    <input type="file" name="user_image" >
             
                                </div>

                                <div class="form-group"> 
                                    <label for="">NID </label>
                                    <br>
                                    <!-- <img width="200px;" height="200px" src="<?=base_url()?>image/<?=$user[0]['nid']?>" alt=""> -->
                                    <a href="<?=base_url()?>image/<?=$user[0]['nid']?>">View PDF</a>
                                    <br>
                                    <p>Your NID file must be a pdf with your NID front & back picture.</p>
                                    <input type="file" name="user_nid" >
             
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
        