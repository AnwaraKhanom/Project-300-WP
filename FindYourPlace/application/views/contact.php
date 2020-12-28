
        <!-- End of nav bar -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Contact page</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"> 
                        <div class="" id="contact1">                        
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <h3><i class="fa fa-phone"></i> Call center</h3>
                                    <p class="text-muted">We advise you to use the electronic
                                        form of communication than call.</p>
                                    <p><strong>+880 1719 304 425</strong></p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-6">
                                    <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                    <p class="text-muted">Please feel free to write an email to us.</p>
                                    <ul>
                                        <li><strong><a href="mailto:">khudeja@gmail.com</a></strong></li>
                                    </ul>
                                </div>
                                <!-- /.col-sm-4 -->
                            </div>
                            <!-- /.row -->
                            <hr>
                            <div id="map"></div>
                            <hr>
                            <h2>Contact form</h2>
                            <?=$this->session->flashdata('success')?>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" value="<?=set_value('name')?>" placeholder="Enter Your Name" id="firstname">
                                        </div>
                                        <div class="error"><?=form_error('name')?></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control" value="<?=set_value('email')?>" placeholder="Enter Your Email" id="email">
                                        </div>
                                        <div class="error"><?=form_error('email')?></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" name="subject" class="form-control" value="<?=set_value('subject')?>" placeholder="Enter The Subject" id="subject">
                                        </div>
                                        <div class="error"><?=form_error('subject')?></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" name="message" class="form-control"><?=set_value('message')?></textarea>
                                        </div>
                                        <div class="error"><?=form_error('message')?></div>
                                    </div>
                                    <div class="col-sm-6">
	                                    <div class="form-group">
			                                <label for="exampleInputPassword1">Contacting as a </label>   
			                                <input type="radio" name="type" value="landlord"    <?php if(set_value('type')=='landlord') { echo 'checked'; }?> > Landlord
	                                		<input type="radio" name="type" value="tenant"    <?php if(set_value('type')=='tenant') { echo 'checked'; }?> > Tenant
	                              		</div>
	                             		<div class="error"><?=form_error('type')?></div>
	                             	</div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

  <!-- Footer area-->
       