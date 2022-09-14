<!DOCTYPE html>  
 <html>  
 <head>  
      <title>Webslesson | <?php echo $title; ?></title>  
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />
 </head>  
 <body>
     <div class="container">
          <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                <!DOCTYPE html>
                                <html>
                                <style>
                                input[type=text], 
                                span {
                                  color:green;
                                }
                              body{
                                   height: 100vh;
                                   background-image: url(https://i.ibb.co/NV83g9f/joanna-kosinska-b-F2vsuby-Hc-Q-unsplash.jpg);
                                   background-size: cover;
                                   background-position: center;
                                   background-repeat: no-repeat;
                              }
                              [type=submit]:hover {
                                   background-color: #45a049;
                              }
                              </style>
                              <body>
                              <h5>  
                                 <h3>Masukan Username dan Password </h3>
                                   <div class="text-center">
                                         
                                         <hr>  
                                        <br /><br /><br />
                                        <form method="post" action="<?php echo base_url(); ?>index.php/main/login_validation">  
                                             <div class="form-group">  
                                                  <label>Masukan Username</label>  
                                                  <input type="text" name="username" class="form-control" />  
                                                  <span class="text-danger"><?php echo form_error('username');?></span>                 
                                             </div>  
                                             <div class="form-group">  
                                                  <label>Masukan Password</label>  
                                                  <input type="password" name="password" class="form-control" />  
                                                  <span class="text-danger"><?php echo form_error('password'); ?></span>  
                                             </div>  
                                             <div class="form-group">  
                                                  <button class="btn btn-primary" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" >
                                                  <span class="glyphicon glyphicon-log-in"> </span> Login
                                                  </button>
                                                  <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';?>
                                             </div>
                                        </div>
                                        <h5>
                                   </div>
                              </div>
                        </div>
                    </div>
               </div>
          </div>
               </div> 
          </div>
     </form>  
     </div>  
     </div> 
 </body>  
 </html>  