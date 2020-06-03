<?php
	function my_output($name, $id, $lang, $email)
	{
		$output = "Hello World, this is {$name} with HNGi7 ID {$id} using {$lang} for stage 2 task. {$email}";
		return $output;
	}

	$json = '{
		"name": "Joel Adewole",			
		"id": "HNG-01643",
        "lang": "PHP",
        "email": "joeladewole3@gmail.com"
	}';

	$obj = json_decode($json);

	
	print my_output($obj->name, $obj->id, $obj->lang, $obj->email);

?>