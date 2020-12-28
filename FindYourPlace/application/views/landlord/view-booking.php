
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="col-md-8 offset-2">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h2 class="text-center font-weight-light my-4">View Bookings</h2></div>
                        <div class="card-body">

                            <table  class="table table-responsive">
            
                                <tr>
                                                
                                    <th>Property</th>
                                    <th>Tenant</th>
                                    <th>Tenant's Email</th>
                                    <th>Tenant's Photo</th>
                                    <th>Tenant's NID</th>
                                    <th>Request Date</th>
                                    <th>Acceptance</th>
                                </tr>

                                <?php  foreach ($booking as $bookings) {  ?>
                                                 
                                            

                                <tr>
                                                
                                    <td><?=$bookings['p_name']?></td>
                                    <td><?=$bookings['name']?></td>
                                    <td><?=$bookings['email']?></td>
                                    <td><a href="<?=base_url()?>image/<?=$bookings['photo']?>"><?=$bookings['photo']?></a></td>
                                    <td><a href="<?=base_url()?>image/<?=$bookings['nid']?>"><?=$bookings['nid']?></a></td>
                                    <td><?=$bookings['date']?></td>
                                    <td><?php if($bookings['done']==1){ echo 'Approved'; } ?>
                                        <a href="<?=base_url()?>Landlord/update_booking/<?=$bookings['r_id']?>/<?php  if($bookings['done']==1){ echo '0'; }else{ echo '1'; } ?>">
                                        <div class="custom-control custom-switch">

                                            <input type="checkbox" <?php  if($bookings['done']==1){ echo 'checked'; } ?> class="custom-control-input" id="customSwitches">
                                            <label class="custom-control-label" for="customSwitches<?=$bookings['r_id']?>"></label>

                                        </div>
                                    </a>
                                    </td>
                                    
                                </tr>

                                <?php } ?>
                                                
                            </table>
                                        
                                    </div>
                                </div>
                            </div>

                         
                    </div>
                </main>
                
    
            