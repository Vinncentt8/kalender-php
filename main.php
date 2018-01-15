<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
* Change the value of parameter 3 if you have set a password on the root userid
* Add port number 3307 in parameter number 5 to use MariaDB instead of MySQL
*/
$mysqli = new mysqli('127.0.0.1', 'root', '', 'kalender_php');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';


$sql = "SELECT * FROM table_cal";


$result = mysqli_query($mysqli, $sql);

if ($result) {
    echo "Selected table_cal successfully";
} else {
    echo "Error selecting data: " . mysqli_error($mysqli);
}

?>


					<?php


					while(($birthdate = $result->fetch_assoc()) && ($name =  $result->fetch_assoc())){
							echo '<h1>'. $months[substr($birthdate['birthdate'],5,2)] .' </h1>';	
							echo '<h2>'. substr($birthdate['birthdate'],8,2) .' </h2>';	
							echo '<h2>'. substr($birthdate['birthdate'],0,4) . '</h2>'; 
							echo '<h3>'. $name['name'] . '</h3>';
							// Concatenate strings zodat Het jaartal achter de naam komt te staan.
						}
					?>	
	

					

<?php

$mysqli->close();

?>