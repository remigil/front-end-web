
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>K3I - Korlantas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/login/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/login/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/login/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/logo-k3i.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <style>
      .material-textfield {
        position: relative;  
      }

      .labelmui {
        position: absolute;
        font-size: 1rem;
        left: 0px;
        top: 50%;
        transform: translateY(-50%);
        background-color: white;
        color: gray;
        padding: 0 0.3rem;
        margin: 0 0.5rem;
        transition: .1s ease-out;
        transform-origin: left top;
        pointer-events: none;
      }
      input {
        font-size: 1rem;
        outline: none;
        border: 1px solid gray;
        border-radius: 5px;  
        padding: 1rem 0.7rem;
        color: gray;
        transition: 0.1s ease-out;
      }
      input:focus {
        border-color: #6200EE;  
      }
      input:focus + .labelmui {
        color: #6200EE;
        top: 0;
        transform: translateY(-50%) scale(.9);
      }
      input:not(:placeholder-shown) + .labelmui {
        top: 0;
        transform: translateY(-50%) scale(.9);
      }
    </style>
</head>
<body id="top">
<div class="page_loader"></div>

<!-- Login 2 start -->
<div class="login-2 login-background" style="background-image: url(<?php echo base_url()?>assets/bg-login.png)"> 
    <div class="login-2-inner">
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-8 align-self-center pad-0 form-info">
                    <?php $error = $this->session->flashdata('error'); 
                      if ($error) {?>
                      <div class="alert dark alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        WARNING : <?php echo $error?>
                      </div>
                    <?php } ?>
                    <div class="form-section align-self-center">
                        <div class="logo-2 logo">
                            <a href="login-2.html">
                                <img src="<?php echo base_url();?>assets/login/img/logos/logo-2.png" alt="logo">
                            </a>
                        </div>
                        <div>
                          <img src="<?php echo base_url();?>assets/logo-main.png" alt="logo">
                        </div>
                        <!-- <div class="btn-section clearfix">
                            <a href="login-2.html" class="link-btn active btn-1 active-bg">Login</a>
                            <a href="register-2.html" class="link-btn btn-2 default-bg">Register</a>
                        </div> -->
                        <div class="clearfix"></div>
                        <form method="post" action="<?php echo base_url();?>login/auth" autocomplete="off">
                            
                            <div class="material-textfield mb-3">
                              <input style="width: 100%;" name="username" placeholder="Nama pengguna atau alamat email" type="text">
                              <label class="labelmui">Nama pengguna atau alamat email</label>
                            </div>
                            <div class="material-textfield">
                              <input style="width: 100%;" placeholder="Password" name="password" type="password">
                              <label class="labelmui">Password</label>
                            </div>
 
                            <div class="mt-3 mb-3" style="display: flex; font-size: 12px;">
                              <input type="checkbox" name="remember" id="remember">
                              <label for="remember" style="margin-left: 5px;">Ingat saya</label>
                            </div>
                            <div style="display: grid;">
                              <button type="submit" class="btn btn-lg btn-primary btn-theme mb-3" style="border-radius: 10px; font-size: 16px; background-color: #003A91">Log Masuk</button> 
                              <a href="javascript(0);" style="font-size: 12px;">Lupa sandi ?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 align-self-center pad-0 bg-img">
                    <img style="border-radius: 0px 25px 25px 0px;margin-left: 24px;"  src="<?php echo base_url()?>assets/img-sidelogin.png" alt="sideImage">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 2 end -->

<!-- External JS libraries -->
<script src="<?php echo base_url();?>assets/login/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url();?>assets/login/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/login/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/login/js/app.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- Custom JS Script --> 

</body>

</html>