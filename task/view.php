<!doctype html>
<html>
<head>
<title>Safe Desicion</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css"
href="style.css">


</head>
<body>

<div class="header">
  <h1>Safe Desicion</h1>
  <p><b>Intelligent Solutions...</b> For Safe World.</p>
</div>

<div class="navbar">
  <a href="control.html">Control</a>
  <a href="view.php" class="active">View</a>
  <a href="home.html">Sign Out</a>
</div>


  <div class="main">
<h4 <p style="float:right">
    <script>
    var today = new Date()
    var curHr = today.getHours()

    if (curHr < 12) {
      document.write('Good morning')
    } else if (curHr < 18) {
      document.write('Good Afternoon')
    } else {
      document.write('Good Evening')
    }
    </script>
    </p></h4>

    </div>

    <h1>All Informations :</h1>
    <br>

    <?php

    // Create connection
    $conn = mysqli_connect("localhost", "root", "", "sdinformation");

    $sql = "SELECT id, Firstname, Lastname, phonenumber, Email, Age FROM Information";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table> <tr><th>ID</th><th>First name</th><th>Last Name</th><th>Phone Number</th><th>EMAIL</th><th>Age</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Firstname"]. "</td><td>" . $row["Lastname"]. "</td><td>" . $row["phonenumber"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Age"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>

    </ul>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="footer">

  <h2 style="color:white;"><br></h2>
  <p style="text-align:center;"><a href="mailto:info@safedecision.com.sa"><img src="images/email.png" width="41" height="40">
    <a href="https://www.twitter.com/safedecisionKSA"target="_blank"><img src="images/twitter.png" width="41" height="40"></a>
    <a href="http://www.facebook.com"target="_blank"><img src="images/facebook.gif" width="41" height="40"></a>

  </p>

</div>

</body>
</html>
