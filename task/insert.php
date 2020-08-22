
<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "sdinformation");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//  user inputs
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Phonenumber = $_POST['Phonenumber'];
$Email = $_POST['Email'];
$Age = $_POST['Age'];
$image = $_POST['image'];



// Attempt insert query execution
$sql = "INSERT INTO information (Firstname, Lastname, Phonenumber, Email, Age, image) VALUES ('$Firstname', '$Lastname', '$Phonenumber' , '$Email' , '$Age' , '$image')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "Can't added the records ";
}
  header("location: upinfo.html");
 //ERROR: Could not able to execute $sql. mysqli_error($link)
// Close connection
mysqli_close($link);
?>
