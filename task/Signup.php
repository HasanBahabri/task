<html>
<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "sdinformation");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//  user inputs
$username = $_POST['username'];
$password = $_POST['password'];


// Attempt insert query execution
$sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

<p><a href="admin.html"> Go back <a/></p>

</html>
