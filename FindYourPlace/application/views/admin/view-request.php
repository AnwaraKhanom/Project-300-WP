
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="col-md-6 offset-3">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h2 class="text-center font-weight-light my-4">View Requests</h2></div>
                        <div class="card-body">

                            <table  class="table table-responsive">
            
                                <tr>
                                                
                                    <th>Property</th>
                                    <th>Landlord</th>
                                    <th>Tenant</th>
                                    <th>Request Date</th>
                                    <th>Acceptance</th>
                                </tr>

                                <?php  foreach ($booking as $bookings) {  ?>
                                                 
                                            

                                <tr>
                                                
                                    <td><?=$bookings['p_name']?></td>
                                    <td><?=$bookings['l_name']?></td>
                                    <td><?=$bookings['t_name']?></td>
                                    <td><?=$bookings['date']?></td>
                                    <td><?php if($bookings['done']==1){ echo 'Approved'; }else{ echo 'Not at all'; } ?></td>
                                </tr>

                                            <?php } ?>
                                                
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>

                         
                    </div>
                </main>
                
    
            