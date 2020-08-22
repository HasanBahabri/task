<?php
$link = mysqli_connect("localhost", "root", "", "sdinformation");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//  user inputs
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT username FROM login WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);


      if($count != 1) {
         header("location: error.html");
         //
      }else{
		 $_SESSION['username'] = $username;
		 header("location: control.html");
	  }


// Close connection
mysqli_close($link);
?>
