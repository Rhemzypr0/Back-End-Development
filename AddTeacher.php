<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student80-353031357e39", "ua92-studentAc", "student80-353031357e39");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $FIRSTNAME= $_POST['FIRSTNAME'];
    $SURNAME= $_POST['SURNAME'];
    $ADDRESS=$_POST['ADDRESS'];
    $EMAIL=$_POST['EMAIL'];
    $CONTACT=$_POST['CONTACT'];

    $sql = "INSERT INTO TEACHER (FIRSTNAME,SURNAME,ADDRESS,EMAIL,CONTACT) 
    VALUES ('$FIRSTNAME','$SURNAME','$ADDRESS','$EMAIL','$CONTACT')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>