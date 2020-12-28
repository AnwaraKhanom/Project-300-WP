
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View Property</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>Thana Name</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Area</th>
                                                <th>Bedrooms</th>
                                                <th>Bathrooms</th>
                                                <th>Garages</th>
                                                <th>Details</th>
                                                <th>Rent</th>
                                                <th>Availability</th>
                                                <th>Property Image</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>

                                            <?php  foreach ($property as $pro) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                <td><?=$pro['thana']?></td>
                                                <td><?=$pro['name']?></td>
                                                <td><?=$pro['address']?></td>
                                                <td><?=$pro['area']?>Sq Ft</td>
                                                <td><?=$pro['bedrooms']?></td>
                                                <td><?=$pro['bathrooms']?></td>
                                                <td><?=$pro['garages']?></td>
                                                <td><?=$pro['detail']?></td>
                                                <td><?=$pro['rent']?></td>
                                                <td><?php if($pro['status']==1){ echo 'Yes'; }else{ echo 'No'; } ?></td>
                                                <td><a href="<?=base_url()?>image/Property/<?=$pro['photo']?>"><?=$pro['photo']?></a></td>
                                                
                                                <td><a href="<?=base_url()?>Landlord/edit-property/<?=$pro['p_id']?>"><button class="btn btn-success">Edit</button></a></td>
                                                <td><a href="<?=base_url()?>Landlord/delete-property/<?=$pro['p_id']?>"><button class="btn btn-danger">Delete</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>

                                        <?php echo $this->pagination->create_links(); ?>
                                        <style> .pagination > .active{background:#d5d8de;}</style>
                                        
                                    </div>
                                </div>

                         
                    </div>
                </main>
                
    
            