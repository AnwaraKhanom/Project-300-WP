
        <!-- End of nav bar -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">My Requests</h1>               
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
                                <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>Property</th>
                                                <th>Landlord</th>
                                                <th>Request Date</th>
                                                <th>Acceptance</th>
                                                <th>Cancel Your Request</th>
                                            </tr>

                                            <?php  foreach ($booking as $bookings) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                <td><?=$bookings['p_name']?></td>
                                                <td><?=$bookings['name']?></td>
                                                <td><?=$bookings['date']?></td>
                                                <td><?php if($bookings['done']==1){ echo 'Approved'; }else{ echo 'Not at all'; } ?></td>
                                                
                                                <td><a href="<?=base_url()?>Findplace/delete-request/<?=$bookings['r_id']?>"><button class="btn btn-danger">Cancel</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>
                            </div>
                            
                        </div>
                    </div>    
                </div>
            </div>
        </div>

  <!-- Footer area-->
       