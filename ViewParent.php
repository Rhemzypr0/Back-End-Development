<html>
<body> 

<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student80-353031357e39", "ua92-studentAc", "student80-353031357e39");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">Parent Name<br><hr></th>
				<th width="250px">Parent LastName<br><hr></th>
                <th width="250px">ADDRESS<br><hr></th>
                <th width="250px">EMAIL<br><hr></th>
				<th width="250px">CONTACT<br><hr></th>
                
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT parentID,PARENTNAME,Plastname,ADDRESS,EMAIL,CONTACT  FROM parent");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['parentID']}</th>
				<th>{$row['PARENTNAME']}</th>
				<th>{$row['Plastname']}</th>
				<th>{$row['ADDRESS']}</th>
				<th>{$row['EMAIL']}</th>
				<th>{$row['CONTACT']}</th> 
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

