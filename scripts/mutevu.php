<?php 

$firstName = "Ian";
$lastName = "Mutevu";
$hngId = "HNG-03643";
$language = 'PHP';

function printOutput($fname, $lname, $id, $language){
	echo "Hello World, this is [" .$fname ."] [" .$lname ."] with HNGi7 ID [" .$id ."] using [" .$language ."] for stage 2 task";
}

printOutput($firstName, $lastName, $hngId, $language);