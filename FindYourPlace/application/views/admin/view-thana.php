
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        <div class="col-md-6 offset-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View Thana</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                
                                                <th>Division Name</th>
                                                <th>Thana</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>

                                            <?php  foreach ($thana as $Thana) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                
                                                <td><?=$Thana['division']?></td>
                                                <td><?=$Thana['thana']?></td>
                                                
                                                <td><a href="<?=base_url()?>Dashboard/edit-thana/<?=$Thana['t_id']?>"><button class="btn btn-success">Edit</button></a></td>
                                                <td><a href="<?=base_url()?>Dashboard/delete-thana/<?=$Thana['t_id']?>"><button class="btn btn-danger">Delete</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>

                                        <?php echo $this->pagination->create_links(); ?>
                                        <style> .pagination > .active{background:#d5d8de;}</style>
                                        
                                    </div>
                                </div>


                                
                                </div>
                         
                    </div>
                </main>
                
    
            