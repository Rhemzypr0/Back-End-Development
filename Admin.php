<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student80-353031357e39", "ua92-studentAc", "student80-353031357e39");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['Login'])) {

    $username= $_POST['username'];
    $password= $_POST['password'];
   

    $sql = "INSERT INTO Adinfo (username,password) 
    VALUES ('$username','$password')";
    if (mysqli_query($link, $sql)) {
      echo "https://swiftwebhost.co.uk/ua92-b4/39011852/database/AddStudent.html";
    } else {
      echo "Error adding record ";
    }

}

?>