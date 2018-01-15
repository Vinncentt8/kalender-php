<?php

<$sql = "DELETE FROM table_cal where id=1";

$result = mysqli_query($mysqli, $sql);

if ($result) {
    echo "deleted successfully";
} else {
    echo "Error deleting data: " . mysqli_error($mysqli);
}




?>