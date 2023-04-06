<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student80-353031357e39", "ua92-studentAc", "student80-353031357e39");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Teachers</h3>
	
		<table>
		
			<tr>
				<th width="150px">TEACHERID<br><hr></th>
				<th width="250px">FIRSTNAME<br><hr></th>
				<th width="250px">SURNAME<br><hr></th>
                <th width="250px">ADDRESS<br><hr></th>
                <th width="250px">EMAIL<br><hr></th>
				<th width="250px">CONTACT<br><hr></th>
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT TEACHERID,FIRSTNAME,SURNAME,ADDRESS,EMAIL,CONTACT FROM TEACHER");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
			<th>{$row['TEACHERID']}</th>
			<th>{$row['FIRSTNAME']}</th>
			<th>{$row['SURNAME']}</th>
			<th>{$row['ADDRESS']}</th>
			<th>{$row['EMAIL']}</th>
			<th>{$row['CONTACT']}</th> 
			
		 </tr>";
			}
			?>
            </table>
        </body>
        </html>