<?php
//my  infromations
$info = array(
    "firstName" => "Njun",
    "lastName" => "Daniele",
    "language" => "PHP",
    "id" => "HNG-00595",
    "email" => "njunfru@gmail.com"
);
//$obj = json_encode($info);

//message to display
$message = "Hello World, this is [{$info['firstName']}] [{$info['lastName']}] with HNGi7 ID [{$info['id']}] using [{$info['language']}] for stage 2 task. njunfru@gmail.com";

//using print function to send out a string.
echo $message;
?>