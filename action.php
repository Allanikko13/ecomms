<?php session_start();
  require "connect.php";
  
    if(isset($_POST['btn_reg'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $confirmpass = $_POST['confirmpass'];

        $q = mysqli_query($conn, "INSERT INTO tbl_login(user, pass, confirmpass) VALUES(
          '$user','$pass','$confirmpass')");
          if ($q){
            echo "<script>
            alert('Registered Successfully');
            window.location.href='login.php';
            </script>";
          }
      }
	  
  if(isset($_POST['btn_login']))
	 {
		$user = $_POST['user'];
        $pass = $_POST['pass'];
		 $q = mysqli_query($conn, "SELECT * FROM tbl_login WHERE user = '$user' AND pass = '$pass'");
        $r = mysqli_fetch_assoc($q);

        if($r){
          echo "<script>
          alert('Login Successfully');
          window.location.href='home.php';
          </script>";
        }
        else{
          echo "<script>
          alert('Invalid Username or password');
          window.location.href='login.php';
          </script>";
        }
      
	 }
   ?>