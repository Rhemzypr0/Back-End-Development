<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student80-353031357e39", "ua92-studentAc", "student80-353031357e39");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $pname = $_POST['PARENTNAME'];
    $Lname = $_POST['Plastname'];
    $ADDRESS=$_POST['ADDRESS'];
    $EMAIL=$_POST['EMAIL'];
    $CONTACT=$_POST['CONTACT'];

    $sql = "INSERT INTO parent (PARENTNAME,Plastname,ADDRESS,EMAIL,CONTACT) 
    VALUES ('$pname','$Lname','$ADDRESS','$EMAIL','$CONTACT')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>