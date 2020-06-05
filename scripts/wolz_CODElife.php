<?php

$json = '{
    "firstName": "Joel",
    "lastName": "Adewole",		
	"id": "HNG-01643",
    "language": "PHP"
}';

$obj = json_decode($json);

print "Hello World, this is [$obj->firstName] [$obj->lastName] with HNGi7 ID [$obj->id] using [$obj->language] for stage 2 task. joeladewole3@gmail.com";

?>