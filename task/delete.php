
<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "sdinformation");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//  user inputs

$id = $_POST['id'];

// Attempt insert query execution
$sql = "Delete from information
		where id = '$id'";


if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 header("location: control.html");

// Close connection
mysqli_close($link);
?>
