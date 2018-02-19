<?php

function getAllBirthdates() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `birthdays`ORDER BY month, day ";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function deleteBirthday($id){
	$db = openDatabaseConnection();

	$sql = "DELETE FROM birthdays WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
}

function saveBirthday($answers){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO birthdays (person, day, month, year) VALUES (:name, :day, :month, :year);";
	var_dump($answers);

	//"INSERT INTO birthdays WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":name", $answers['person']);
	$query->bindParam(":day", $answers['day']);
	$query->bindParam(":month", $answers['month']);
	$query->bindParam(":year", $answers['year']);
	$query->execute();
}