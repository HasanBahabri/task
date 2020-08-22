
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sdinformation");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//  user inputs
$id = $_POST['id'];
$Phonenumber = $_POST['Phonenumber'];
$Email = $_POST['Email'];
// Attempt insert query execution
$sql = "UPDATE information
		SET Phonenumber='$Phonenumber' , Email='$Email'
		where id = '$id'";


if(mysqli_query($link, $sql)){
    echo "Records updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
	 header("location: control.html");
// Close connection
mysqli_close($link);
?>
