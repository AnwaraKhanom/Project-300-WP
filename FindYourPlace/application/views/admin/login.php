<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="<?=base_url()?>asset/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?=$this->session->flashdata('success')?>
                                        <form action="" method="post">
                                            

                                            <!--<div class="message"></div>-->

                                            <div class="form-group"> 
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input type="text" class="form-control py-4" id="get_email" placeholder="Enter email address" value="<?=set_value('email')?>" name="email">
                                                <div class="error"><?=form_error('email')?></div>
                                            </div>

                                            <div class="form-group"> 
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input type="password" class="form-control py-4" id="get_password" value="<?=set_value('password')?>" placeholder="Enter password" name="password">
                                                <div class="error"><?=form_error('password')?></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>

                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"> 
                                                    <a class="small" href="<?=base_url()?>Admin/password">Forgot Password?</a>
                                                    <!--<button type="submit" class="btn btn-primary">Login</button>-->
                                                    <button type="button" onclick="login_now()" class="btn btn-primary">Login</button>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?=base_url()?>Admin/register">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        


        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <script type="text/javascript">
        
        function login_now(){

            //alert('HI');
         
            var email=$('#get_email').val();
            var password=$('#get_password').val();

                //alert(user_name);
                var email = encodeURIComponent(email);

            var page='<?=base_url()?>Admin/login/'+email+'/'+password;

            //alert(page );

            $.get( page, function( data ) {

            //alert(data );

            if(data=='Yes'){

                window.location.replace("<?=base_url()?>Dashboard");
            }else{

                 $( ".message" ).html('<div class="alert alert-danger">Wrong Mobile/Password.</div>' );
            }
            //  $( ".our_result" ).html( data );
             // alert( "Load was performed." );

             // Simulate an HTTP redirect:
            
            });
        }
        


    </script>

    <script src="<?=base_url()?>asset/js/scripts.js"></script>

    </body>
</html>
