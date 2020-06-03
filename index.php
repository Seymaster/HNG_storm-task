<?php
$extensions = [
    'js' => 'node',
    'php' => 'php',
    'py' => 'python',
    'java' => 'java',
];
$count = 0;
$log_directory = $_SERVER['DOCUMENT_ROOT'] . 'scripts';
$files = [];
$content = [];
define("PASS_TEXT", 
	"/^Hello\s+World,\s+this\s+is\s+((\w+\s+)+)with\s+HNGi7\s+ID\s+(\d+)\s+using\s+([^\s]+)\s+for\s+stage\s+2\s+task\s*\.\s+(.+\.[\w]+)\s*\.*$/");
foreach (glob($log_directory . '/*.*') as $file) {
    $files[] = $file;
}

foreach ($files as $file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);
	$item = [];
	$score = true;
	if (array_key_exists($ext, $extensions)) {
		$command = $extensions[$ext];
		$data = [];
		$read = exec("{$command} {$file}",$lines,$status);
		ob_flush();
		flush();
		$item["file"]=$file;
		if($status==0){
		    $user = [];
		    $score = preg_match(PASS_TEXT,$read,$user);
		    $item["status"] = $score?"Pass":"Fail";
            $item["output"] = $read;
		    if($score){
		        $item["id"] = $user[3];
		        $item["name"] = $user[1];
                $item["language"] = $user[4];
                $item["email"] = $user[5];
		    }
		    else{
		        $item["error"]="Bad Output";  
		    }
		}
		else{
			$item["error"] = "Execution Failed";
			$item["status"] = "Fail";
		}
    }
    else{
        $item["error"]="Unsupported Language";
        $item["status"]="Fail";
    }
	$content[]=$item;
}
if ($_SERVER['QUERY_STRING'] === 'json'){
    $myJSON = json_encode($content);
    header('Content-Type: application/json');
    echo $myJSON;
    flush();
}
else{
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Storm</title>
</head>

<body>
		<h1>Team Storm</h1>
<?php foreach ($content as $data):?>
    <?php if (isset($data['error'])):?>
		<p><?php echo $data['error']?></p>
    <?php else: ?>
		<p><?php echo "Hello World, this is " . $data['name'] . " with HNGi7 ID " . $data['id'] . ' ' . " using " . $data['language'] . " for stage two task"?></?>
	<?php endif;?>
<?php endforeach;?>

</body>
</html>
<?php }?>