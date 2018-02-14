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