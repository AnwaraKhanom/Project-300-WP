
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View Division</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>Division</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>

                                            <?php  foreach ($user as $user) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                <td><?=$user['division']?></td>
                                                
                                                <td><a href="<?=base_url()?>Dashboard/edit-division/<?=$user['id']?>"><button class="btn btn-success">Edit</button></a></td>
                                                <td><a href="<?=base_url()?>Dashboard/delete-division/<?=$user['id']?>"><button class="btn btn-danger">Delete</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>
                                        
                                    </div>
                                </div>


                                
                                </div>
                         
                    </div>
                </main>
                
    
            