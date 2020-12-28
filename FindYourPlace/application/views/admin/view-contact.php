
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h2 class="text-center font-weight-light my-4">View Contacts</h2></div>
                                    <div class="card-body">

                                        <table  class="table table-responsive">
            
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Type</th>
                                                <th>Delete</th>
                                            </tr>

                                            <?php  foreach ($contact as $conta) {  ?>
                                                 
                                            

                                            <tr>
                                                
                                                <td><?=$conta['name']?></td>
                                                <td><?=$conta['email']?></td>
                                                <td><?=$conta['subject']?></td>
                                                <td><?=$conta['message']?></td>
                                                <td><?=$conta['type']?></td>
                                                
                                                <td><a href="<?=base_url()?>Dashboard/delete-contact/<?=$conta['contact_id']?>"><button class="btn btn-danger">Delete</button></a></td>
                                            </tr>

                                            <?php } ?>
                                                
                                        </table>

                                        <?php echo $this->pagination->create_links(); ?>
                                        <style> .pagination > .active{background:#d5d8de;}</style>
                                        
                                    </div>
                                </div>


                                
                                
                         
                    </div>
                </main>
                
    
            