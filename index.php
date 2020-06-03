<?php
$html = <<<HTML
<!doctype html>
<html>
<head>
<title>Task 2</title>
</head>
<body>
<h5>Team Storm</h5>
<ul>
HTML;
$results = array();
$languages = array("py"=>"python","js"=>"node","php"=>"php -f");
$users = array();
define("PASS_TEXT", 
	"/^Hello\s+World,\s+this\s+is\s+((\w+\s+)+)with\s+HNGi7\s+ID\s+(\d+)\s+using\s+([^\s]+)\s+for\s+stage\s+2\s+task$/");
$files = scandir("./scripts");
foreach($files as $i){
	if($i == "." || $i=="..")continue;
	$file = file_get_contents("./scripts/".$i);
	$ext = pathinfo("./scripts/".$i, PATHINFO_EXTENSION);
	if(array_key_exists($ext, $languages)){
		$value = shell_exec($languages[$ext]." ./scripts/".$i);
	}
	else{
		$value = "Error";
	}
	$user = array();
	$score = preg_match(PASS_TEXT,$value,$user);
	$results[$i] = $score?"pass":"fail";
	if($score){
		$id = $user[3];
		while(array_key_exists($id,$users))$id=$id."~";
		$name = $user[1];
		$lang = $user[4];
		$users[$id]=array("name"=>$name,"language"=>$lang);
	}
}
if (array_key_exists("json",$_GET)){
	$myJSON = json_encode($results);
	header('Content-Type: application/json');
	echo $myJSON;
	flush();
}
else if (array_key_exists("users",$_GET)){
	$myJSON = json_encode($users);
	header('Content-Type: applicatio    n/json');
	echo $myJSON;
	flush();
}
else{
	echo $html;
	foreach($results as $name=>$score){
	if($score=="pass"){
		echo "<li>".$name." : PASS</li>";
	}
	else{
		echo "<li>".$name." :FAIL</li>";
	}
	}
	echo "</ul></body></html>";
}
?>
