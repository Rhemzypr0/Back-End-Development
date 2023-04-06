<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student80-353031357e39", "ua92-studentAc", "student80-353031357e39");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $message = $_POST['message'];
    $returncontact= $_POST['returncontact'];
   

    $sql = "INSERT INTO contact (name,message,returncontact) 
    VALUES ('$name','$message','$returncontact')";
    if (mysqli_query($link, $sql)) {
      echo "reqeust sent successfully";
    } else {
      echo "Error adding record ";
    }

}

?>