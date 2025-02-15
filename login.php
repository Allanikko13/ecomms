<?php session_start();
require 'connect.php';
if(isset($_SESSION['user'])){
	header("location:home.php");
}?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">



</head>
<body style="background-color: #F7E1D3;"; height: auto;">
<div class="top-nav-bar">
<a href="index.php"><img src="images/favicon.ico" class="logo"></a>
<div class="menu-bar">
<ul>
<li><a href="register.php">Sign up</a></li>
<li><a href="login.php">Log in</a></li>
</ul>
</div>
</div>
    <div id="login">

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="action.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="user" id="user" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info" >Password:</label><br>
                                <input type="password" name="pass" id="pass" class="form-control">
                                <i class="far fa-eye" id="togglePassword" style="margin-left: 430px; margin-top:-25px; cursor: pointer;"></i>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="btn_login" class="btn btn-info btn-md" value="Sign In!">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="register.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type = "text/javascript">
      const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pass');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
        </script>
</body>
</html>