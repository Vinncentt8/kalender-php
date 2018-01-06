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


$sql = "EXPLAIN SELECT * FROM `table_cal`";


if (mysqli_query($mysqli, $sql)) {
    echo "Table table_cal created successfully";
} else {
    echo "Error creating table: " . mysqli_error($mysqli);
}




$mysqli->close();

?>