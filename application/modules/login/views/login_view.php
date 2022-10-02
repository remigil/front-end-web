
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
      .material-textfield  input {
        font-size: 1rem;
        outline: none;
        border: 1px solid gray;
        border-radius: 5px;  
        padding: 1rem 0.7rem;
        color: gray;
        transition: 0.1s ease-out;
      }
      .material-textfield  input:focus {
        border-color: #6200EE;  
      }
      .material-textfield  input:focus + .labelmui {
        color: #6200EE;
        top: 0;
        transform: translateY(-50%) scale(.9);
      }
      .material-textfield  input:not(:placeholder-shown) + .labelmui {
        top: 0;
        transform: translateY(-50%) scale(.9);
      }



      .material-selectfield {
        position: relative;  
      } 
      .material-selectfield  select {
        font-size: 1rem;
        outline: none;
        border: 1px solid gray;
        border-radius: 5px;  
        padding: 1rem 0.7rem;
        color: gray;
        transition: 0.1s ease-out;
        width: 100%;
        background-color: transparent;
      }
      .material-selectfield  select:focus {
        border-color: #6200EE;  
      }
      .material-selectfield  select:focus + .labelmui {
        color: #6200EE;
        top: 0;
        transform: translateY(-50%) scale(.9);
      }
      .material-selectfield  select:not(:placeholder-shown) + .labelmui {
        top: 0;
        transform: translateY(-50%) scale(.9);
      }
    </style>


    
    <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase-messaging.js"></script>
    <script> 
        
        firebase.initializeApp({
            'messagingSenderId': '475022830226'
        })
            
        const messaging = firebase.messaging();
        function initFirebaseMessagingRegistration() {
            messaging
                .requestPermission()
                .then(function () {
                    messageElement.innerHTML = "Got notification permission";
                    console.log("Got notification permission");
                    return messaging.getToken();
                })
                .then(function (token) {
                    // print the token on the HTML page
                    $('#tokenNotif').val(token);
                    tokenElement.innerHTML = "Token is " + token;
                })
                .catch(function (err) {
                    errorElement.innerHTML = "Error: " + err;
                    // console.log("Didn't get notification permission", err);
            
                    Notification.requestPermission(function() {
                        if (Notification.permission === 'granted') {
                            // user approved.
                            // use of new Notification(...) syntax will now be successful
                        } else if (Notification.permission === 'denied') {
                            // user denied.
                        } else { // Notification.permission === 'default'
                            // user didn’t make a decision.
                            // You can’t send notifications until they grant permission.
                        }
                    });

                });
        }
        messaging.onMessage(function (payload) {
            console.log("Message received. ", JSON.stringify(payload));
            notificationElement.innerHTML = notificationElement.innerHTML + " " + payload.data.notification;
        });
        messaging.onTokenRefresh(function () {
            messaging.getToken()
                .then(function (refreshedToken) {
                    console.log('Token refreshed.');
                    $('#tokenNotif').val(refreshedToken);
                    tokenElement.innerHTML = "Token is " + refreshedToken;
                }).catch(function (err) {
                    errorElement.innerHTML = "Error: " + err;
                    console.log('Unable to retrieve refreshed token ', err);
                });
        });
    </script>
</head>
<body id="top">
<div class="page_loader"></div>

<!-- Login 2 start -->
<div class="login-2 login-background" style="background-image: url(<?php echo base_url()?>assets/bg-login.png)"> 
  <?php $error = $this->session->flashdata('error'); if ($error) {?> 
    <div class="alert dark alert-warning alert-dismissible" role="alert">
      <button type="button" class="close btn" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      WARNING : <?php echo $error?>
    </div> 
  <?php } ?>
    <div class="login-2-inner">
        <div class="container">
            <div class="row login-box"> 
                <div class="col-lg-8 align-self-center pad-0 form-info"> 
                    <div class="form-section align-self-center"> 
                        <!-- <div class="logo-2 logo">
                            <a href="login-2.html">
                                <img src="<?php echo base_url();?>assets/login/img/logos/logo-2.png">
                            </a>
                        </div> -->
                        <div>
                          <img src="<?php echo base_url();?>assets/logo-main.png">
                        </div> 
                        <!-- <div class="btn-section clearfix">
                            <a href="login-2.html" class="link-btn active btn-1 active-bg">Login</a>
                            <a href="register-2.html" class="link-btn btn-2 default-bg">Register</a>
                        </div> -->
                        <div class="clearfix"></div>
                        <div style="display: none;">
                          <h1>This is a test page</h1>
                          <div id="token" style="color:lightblue"></div>
                          <div id="message" style="color:lightblue"></div>
                          <div id="notification" style="color:green"></div>
                          <div id="error" style="color:red"></div>
                        </div>
                        <script>
                            messageElement = document.getElementById("message")
                            tokenElement = document.getElementById("token")
                            notificationElement = document.getElementById("notification")
                            errorElement = document.getElementById("error")
                        </script>
                        <!-- <button onclick="initFirebaseMessagingRegistration()">Enable Firebase Messaging</button> -->
                        <form method="post" action="<?php echo base_url();?>login/auth" autocomplete="off"> 

                            <textarea  name="token" id="tokenNotif" cols="5" rows="5"></textarea>
                            
                            <div class="material-textfield mb-3">
                              <input style="width: 100%;" onclick="initFirebaseMessagingRegistration()" name="username" placeholder="Nama pengguna atau alamat email" type="text">
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