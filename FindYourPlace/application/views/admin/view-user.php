
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View User</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Password</th>
                                                <th>Address</th>
                                                <th>Photo</th>
                                                <th>NID</th>
                                                <th>Type</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>

                                            <?php  foreach ($user as $user) {  ?>
                                                 
                                       <?php if($user['type'] != "admin")
                                        { ?>
                                            <tr>
                                                
                                                <td><?=$user['name']?></td>
                                                <td><?=$user['email']?></td>
                                                <td><?=$user['mobile']?></td>
                                                <td><?=$user['password']?></td>
                                                <td><?=$user['address']?></td>
                                                <td><a href="<?=base_url()?>image/<?=$user['photo']?>"><?=$user['photo']?></a></td>
                                                <td><a href="<?=base_url()?>image/<?=$user['nid']?>"><?=$user['nid']?></a></td>
                                                <td><?<?=$user['name']?>$user['type']?></td>
                                                
                                                <td><a href="<?=base_url()?>Dashboard/edit-user/<?=$user['id']?>"><button class="btn btn-success">Edit</button></a></td>
                                                <td><a href="<?=base_url()?>Dashboard/delete-user/<?=$user['id']?>"><button class="btn btn-danger">Delete</button></a></td>
                                            </tr>
                                      <?php  } ?>

                                            

                                            <?php } ?>
                                                
                                        </table>
                                        <?php echo $this->pagination->create_links(); ?>
                                        <style> .pagination > .active{background:#d5d8de;}</style>
                                        
                                    </div>
                                    
                                </div>


                                
                                
                         
                    </div>
                </main>
                
    
            