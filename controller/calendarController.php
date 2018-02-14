<?php

require(ROOT . "model/BirthdateModel.php");

function index()
{
	render("calendar/index", array(
		'birthdays' => getAllBirthdates()
	));
}


function delete($id)
{
	deleteBirthday($id);
	header('Location: '.URL."calendar");
}

function add(){
	render("calendar/add");
}

function save(){
	// Maak een array aan met de waarden uit de $_POST variabele
	//$answers = array[$_post["name"], $_post["day"], $_post["month"],$_post["year"]];
	// Roep een functie uit de Model aan die de verjaardag toevoegt

	// Stuur het programma weer terug naar de index action
	header('Location: '.URL."calendar");
}