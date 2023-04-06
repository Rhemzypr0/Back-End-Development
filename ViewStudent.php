<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student80-353031357e39", "ua92-studentAc", "student80-353031357e39");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">student ID<br><hr></th>
				<th width="250px">Student Name<br><hr></th>
				<th width="250px">Student LastName<br><hr></th>
                <th width="250px">ADDRESS<br><hr></th>
                <th width="250px">EMAIL<br><hr></th>
				<th width="250px">CONTACT<br><hr></th>
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT STUDENTID,FIRSTNAME,LASTNAME,ADDRESS,EMAIL,CONTACT FROM STUDENTS");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
			<th>{$row['STUDENTID']}</th>
			<th>{$row['FIRSTNAME']}</th>
			<th>{$row['LASTNAME']}</th>
			<th>{$row['ADDRESS']}</th>
			<th>{$row['EMAIL']}</th>
			<th>{$row['CONTACT']}</th> 
			
		 </tr>";
			}
			?>
            </table>
        </body>
        </html>


