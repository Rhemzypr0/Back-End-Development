<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student80-353031357e39", "ua92-studentAc", "student80-353031357e39");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $STUDENTNAME= $_POST['FIRSTNAME'];
    $LASTNAME= $_POST['LASTNAME'];
    $ADDRESS=$_POST['ADDRESS'];
    $EMAIL=$_POST['EMAIL'];
    $CONTACT=$_POST['CONTACT'];

    $sql = "INSERT INTO STUDENTS (FIRSTNAME,LASTNAME,ADDRESS,EMAIL,CONTACT) 
    VALUES ('$STUDENTNAME','$LASTNAME','$ADDRESS','$EMAIL','$CONTACT')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>