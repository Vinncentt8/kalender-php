<h1>Birthdate calendar</h1>

<?php

$month = "";
$day = "";

	foreach($birthdays as $bday){
		if ($bday["month"] != $month) {
			echo "<h1>" . date('F', mktime(0, 0, 0, $bday['month'], 10))  . "</h1>";
			$month = $bday["month"];
		}

		if($bday["day"] != $day){
			echo "<h2>" . $bday['day']  . "</h2>";
			$day = $bday["day"];
		}
			echo "<p><a href = '" . URL . "calendar/edit/" . $bday["id"]. "'>" . $bday["person"] . "(" . $bday['year'] . ")" . " </a><a href = '" . URL . "calendar/delete/" . $bday["id"]. "'>x</a></p>";
			
	}

?>
<p><a href = "<?=URL?>calendar/add">Add birthdate</a></p>


