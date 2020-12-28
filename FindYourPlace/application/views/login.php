
        <!-- End of nav bar -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Log In </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
 

        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <!--<div class="col-md-6">-->
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <?=$this->session->flashdata('success')?>
                            <h2>Login : </h2> 
                            <form action="" method="post">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="email" class="form-control" value="<?=set_value('email')?>" placeholder="Enter Email"  id="exampleInputEmail1" aria-describedby="emailHelp">
            
                                </div>
                                <div class="error"><?=form_error('email')?></div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" value="<?=set_value('password')?>" placeholder="Enter Password"  id="exampleInputPassword1">
                                </div>
                                <div class="error"><?=form_error('password')?></div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default"> Log in</button>
                                </div>
                            </form>
                            <br>
                            <div class="text-center">
                                <p>Don't have any account? <a class="" href="<?=base_url()?>register">Register Now</a> </p>
                            </div>

                            <br>
                            
                            <h2>Social login :  </h2> 
                            
                            <p>
                            <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                            <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a> 
                            <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>  
                            </p> 
                        </div>
                        
                    </div>
                <!--</div>-->

            </div>
        </div>      

          <!-- Footer area-->
        