
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Edit Division</h2></div>
                                    <div class="card-body">
                                        <?=$this->session->flashdata('success')?>
                                                <form action="" method="post">
                                                    <!--<?php echo $this->session->flashdata('message'); ?>-->

                                                    <!--<div class="message"></div>-->

                                                    <div class="form-group"> 
                                                        <label class="small mb-1" for="inputEmailAddress">Division</label>
                                                        <input type="text" class="form-control py-4" placeholder="Enter Division" value="<?php if(set_value('division')){ echo set_value('division'); }else{ echo $divi[0]['division']; } ?>" name="division">
                                                        <div class="error"><?=form_error('division')?></div>
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
                
    
            