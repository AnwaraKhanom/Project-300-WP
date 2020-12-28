
        <!-- End of nav bar -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">New account / Register </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
 

        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

               <!-- <div class="col-md-6">-->
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <?=$this->session->flashdata('success')?>
                            <h2>New account : </h2> 
                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" value="<?=set_value('name')?>" placeholder="Enter Name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="error"><?=form_error('name')?></div>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" name="email" class="form-control" value="<?=set_value('email')?>" placeholder="Enter Email"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="error"><?=form_error('email')?></div>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" name="mobile" class="form-control" value="<?=set_value('mobile')?>" placeholder="Enter Mobile"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="error"><?=form_error('mobile')?></div>

                                <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <textarea name="address" class="form-control"><?=set_value('address')?></textarea>
                                        
            
                                </div>
                                <div class="error"><?=form_error('address')?></div>

                                 <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" value="<?=set_value('password')?>" placeholder="Enter Password"  id="exampleInputPassword1">
                                </div>
                                <div class="error"><?=form_error('password')?></div>
                                  
                                <div class="form-group">
                                        <label for="exampleInputPassword1">Verify Password</label>
                                        <input type="password" name="verify_password"  class="form-control" value="<?=set_value('verify_password')?>" placeholder="Enter Verify password"  id="exampleInputPassword1">
                                </div>
                                <div class="error"><?=form_error('verify_password')?></div>

                                <div class="form-group">
                                <label for="exampleInputPassword1">Register as a </label>   
                                <input type="radio" name="type" value="landlord"    <?php if(set_value('type')=='landlord') { echo 'checked'; }?> > Landlord

                                <input type="radio" name="type" value="tenant"    <?php if(set_value('type')=='tenant') { echo 'checked'; }?> > Tenant
                              </div>
                             <div class="error"><?=form_error('type')?></div>

                                <div class="form-group"> 
                                        <label for="">Photo</label>
                                        <br>
                                        <input type="file" name="user_image" >
             
                                </div>

                                <div class="form-group"> 
                                        <label for="">NID </label>
                                        <p>Your NID file must be a pdf with your NID front & back picture.</p>
                                        <input type="file" name="user_nid" >
             
                                </div> 



                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
               <!-- </div>-->
            </div>
        </div>      

          <!-- Footer area-->
        