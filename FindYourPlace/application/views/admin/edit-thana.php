
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                        	<div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Edit Thana</h2></div>
                                    <div class="card-body">

									<?=$this->session->flashdata('success')?>
							 
								<form action="" method="post">
								
								 

									<div class="form-group">
										
										<label for="exampleInputEmail1">Division</label> <br>	
										<select  name="division" class="get_division form-control" >
											
											<option value="">---Please Select Division---</option>
											 <?php  foreach ($division as $divi) {  ?>

								 		

								 			<option value="<?=$divi['id']?>" <?php if(set_value('division_id')==$divi['id']) { echo 'selected'; } else if($thana[0]['division_id']==$divi['id']){ echo 'selected'; } ?> ><?=$divi['division']?></option>
								 		

								 		<?php } ?>



										</select>


									 </div>
									 <div class="error"><?=form_error('division')?></div>

						 			



						 			<div class="form-group">
										<label for="exampleInputEmail1">Thana</label>
										<input type="text" name="thana" class="form-control" value="<?php if(set_value('thana')){ echo set_value('thana'); }else{ echo $thana[0]['thana']; } ?>" placeholder="Enter Thana"  id="exampleInputEmail1" aria-describedby="emailHelp">
										
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
                
	