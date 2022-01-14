 <?php 
include "connect.php"; 
?>
<head>
<title>Register</title>
<link rel="stylesheet" href="css/register.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                        <form id="register-form" class="form" action="action.php" method="post">
						
                            <h3 class="text-center text-info">Registration Form</h3>
                            <div class="form-group">
                                <label class="text-info">Username:</label><br>
                                <input type="text" name="user" id="user" class="form-control">
                            </div>
                            <div class="form-group">
                                <label  class="text-info">Password:</label><br>
                                <input type="password" name="pass" id="pass" class="form-control" pattern=".{8,}"  title="Eight or more characters" onkeyup='check();'>
                                <i class="far fa-eye" id="togglePassword" style="margin-left: 475px; margin-top:-25px; cursor: pointer;"></i>
                            </div>
							<div class="form-group">
                                <label  class="text-info">Confirm Password:</label><br>
                                <input type="password" name="confirmpass" id="confirmpass" class="form-control" pattern=".{8,}"  title="Eight or more characters" onkeyup='check();'>
                                <i class="far fa-eye" id="togglePassword1" style="margin-left: 475px; margin-top:-25px; cursor: pointer;"></i>                       
                            </div>
							<div class="form-group">                
                                <input type="submit" id="btnSubmit" name="btn_reg" class="btn btn-info btn-md" value="Sign Up">
                            </div>                    		
                            <div id="register-link" class="text-right">
                                <a href="login.php" class="text-info">Already Have an Account?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script type="text/javascript">
    $(function () {
      $("#btnSubmit").click(function () {
          var password = $("#pass").val();
          var confirmPassword = $("#confirmpass").val();
          if (password != confirmPassword) {
              alert("Passwords do not match.");
              return false;
          }
          return true;
      });
  });

  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pass');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

const togglePassword1 = document.querySelector('#togglePassword1');
  const password1 = document.querySelector('#confirmpass');
 
  togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
    </script>
</body>
</html>