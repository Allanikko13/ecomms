<?php session_start();
  require "connect.php";

  if(isset($_SESSION["username"]))
  {
    echo '<script>
          window.location.href="home.php";
          </script>';
  }
  if (isset($_POST["btn_reg"]))
  {
    if(empty($_POST["user"]) || empty($_POST["pass"]) || empty($_POST["confirmpass"]))
    {
      echo '<script>alert("All Fields are Required");
             window.location.href="register.php";
              </script>';
    }
    else
    {
      $user = mysqli_real_escape_string($conn, $_POST["user"]);
      $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
      $confirmpass = mysqli_real_escape_string($conn, $_POST["confirmpass"]);
      $pass = password_hash($pass, PASSWORD_DEFAULT);
      $confirmpass = password_hash($confirmpass, PASSWORD_DEFAULT);
      $query = "INSERT INTO tbl_login(user, pass, confirmpass) VALUES('$user', '$pass', '$confirmpass')";
      if(mysqli_query($conn, $query))
      {
        echo '<script>alert("Registered Successfully!");
              window.location.href="login.php";
              </script>';
      }
    }
  }
  if (isset($_POST["btn_login"]))
  {
    if (empty($_POST["user"]) || empty($_POST["pass"]))
    {
      echo '<script>alert("Both Fields are Required");
              window.location.href="login.php";
            </script>';
    }
    else
    {
      $user = mysqli_real_escape_string($conn, $_POST["user"]);
      $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
      $query = "SELECT * FROM tbl_login WHERE user = '$user'";
      $result = mysqli_query($conn, $query);
      if(mysqli_num_rows($result) > 0)
      {
        while($row = mysqli_fetch_array($result))
        {
          if(password_verify($pass, $row["pass"]))
          {
            $_SESSION["user"] = $user;
            echo '<script>alert("Login Successfully!");
            window.location.href="home.php";
            </script>';
          }
          else
          {
            echo '<script>alert("Invalid Username and Password");
            window.location.href="login.php";
            </script>';
          }
        }
      }
      else
      {
        echo '<script>alert("Wrong User Details");
               window.location.href="login.php";
              <script>';
      }
    }
  }
  //   if(isset($_POST['btn_reg'])){
  //       $user = $_POST['user'];
  //       $pass = $_POST['pass'];
  //       $confirmpass = $_POST['confirmpass'];
  //       $pass = password_hash($pass, PASSWORD_DEFAULT); 
  //       $confirmpass = password_hash($confirmpass, PASSWORD_DEFAULT);
  //       $q = mysqli_query($conn, "INSERT INTO tbl_login(user, pass, confirmpass) VALUES(
  //         '$user','$pass', '$confirmpass'");
  //         if ($q){
  //           echo "<script>
  //           alert('Registered Successfully');
  //           window.location.href='login.php';
  //           </script>";
  //         }
  //     }
	  
  // if(isset($_POST['btn_login']))
	//  {
	// 	    $user = $_POST['user'];
  //       $pass = $_POST['pass'];
	// 	 $q = mysqli_query($conn, "SELECT * FROM tbl_login WHERE user = '$user' AND pass = '$pass'");
  //       $r = mysqli_fetch_assoc($q);

  //       if($r){
  //         echo "<script>
  //         alert('Login Successfully');
  //         window.location.href='home.php';
  //         </script>";
  //       }
  //       else{
  //         echo "<script>
  //         alert('Invalid Username or password');
  //         window.location.href='login.php';
  //         </script>";
  //       }
      
	//  }
   ?>