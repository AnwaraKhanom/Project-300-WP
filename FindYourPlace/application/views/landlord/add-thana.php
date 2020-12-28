
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                        	<div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Add Thana</h2></div>
                                    <div class="card-body">

									<?=$this->session->flashdata('success')?>
							 
								<form action="" method="post">
								
								 

									<div class="form-group">
										
										<label for="exampleInputEmail1">Division</label> <br>	
										<select  name="division" class="get_division form-control" >
											
											<option value="">---Please Select Division---</option>
											 <?php  foreach ($user as $user) {  ?>

								 		

								 			<option value="<?=$user['id']?>" <?php if(set_value('division_id')==$user['id']) { echo 'selected'; } ?> ><?=$user['division']?></option>
								 		

								 		<?php } ?>



										</select>


									 </div>
									 <div class="error"><?=form_error('division')?></div>

						 			



						 			<div class="form-group">
										<label for="exampleInputEmail1">Thana</label>
										<input type="text" name="thana" class="form-control" value="<?=set_value('thana')?>" placeholder="Enter Thana"  id="exampleInputEmail1" aria-describedby="emailHelp">
										
									</div>
									<div class="error"><?=form_error('thana')?></div>	
						 			
									<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"> 
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                            
                                    </div>
							 
						 
								</form>
							</div>
						</div>


								
								</div>
                         
                    </div>
                </main>
                
	