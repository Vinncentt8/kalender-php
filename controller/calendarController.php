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
	//$answers = array($_post["name"], $_post["day"], $_post["month"],$_post["year"]);

	$result = saveBirthday($_POST);
	
	// Roep een functie uit de Model aan die de verjaardag toevoegt

	// Stuur het programma weer terug naar de index action
	header('Location: '.URL."calendar");
}

function edit($id){
	//echo "zit nu in de edit";



	$birthdate = getBirthdateById($id);

	echo "received in controller:<br>";
	print_r($birthdate);

	render("calendar/edit", ['birthday' => $birthdate]);
// $result = update($_POST);
}


function editSave(){

	update($_POST);
	header('Location: ' . URL . 'calendar' );
}