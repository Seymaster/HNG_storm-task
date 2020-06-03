<?php

//Get scripts
$folder = 'testScripts';
$files = scandir($folder);

//Check if the script exists and set its command
function getScripts($files, $folder)
{
    $extensions = [
        'js' => 'node',
        'php' => 'php',
        'py' => 'Python',
        'javac' => 'java',
    ];

    foreach ($files as $file) {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        // var_dump($ext);
        if (array_key_exists($ext, $extensions)) {
            $scripts[] = ['name' => "$folder/" . $file, 'command' => $extensions[$ext], 'filename' => $file];

        }
    }

    return $scripts;

};

$scripts = getScripts($files, $folder);
$totalScripts = count($scripts);
$totalScript = 0;
$totalPassed = 0;

//Loop through the scripts, execute and store it output in an array
foreach ($scripts as $key => $script) {
    if (file_exists($scripts[$key]['name'])) {
        $read = exec("{$scripts[$key]['command']} {$scripts[$key]['name']}");
        $content[] = ['output' => $read, 'filename' => $scripts[$key]['name']];
    }

}

$members = [];
$messages = [];

$re = '/^Hello World, this is (?<first>\[\w+\])? (?<last>\[\w+\])? with HNGI7 ID (?<id>\[HNG-\d+\])? using (?<language>\[\w+\])? for stage 2 task. /i';

foreach ($content as $key => $data) {
    $output = $content[$key]['output'];
    $str = $output;
    $email = explode(" ", $str);
    $email = array_pop($email);
    $email = trim($email);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
        $filename = $content[$key]['filename'];
        if ($matches) {
            foreach ($matches as $match) {
                $totalPassed++;
                $userData = $match[0];

                $data = preg_replace('/\[/i', '', $userData);

                $data = preg_replace('/\]/i', '', $data);

                $messages[] = ['id' => $match['id'], 'message' => $data, 'pass' => true, 'filename' => $filename];

                $members[] = ['id' => $match['id'], 'firstname' => $match['first'], 'lastname' => $match['last'], 'email' => $email, 'language' => $match['language'], 'filename' => $filename, 'output' => $data];
            }
        } else {
            $userMessage = str_replace($email, '', $output);
            $userMessage = preg_replace('/\[/', '', $userMessage);
            $userMessage = preg_replace('/\]/', '', $userMessage);
            $messages[] = ['id' => 'Poorly Formated File', 'message' => $userMessage, 'pass' => false, "filename" => "Incorrect response from script {$filename}"];

        }

    } else {
        $failed = "You did not provide a valid email address. Your String must return an email";
        $messages[] = ['id' => 'No Email Returned', 'message' => $failed, 'pass' => false, 'filename' => $filename];
    }

}

if ($_SERVER['QUERY_STRING'] === 'json') {
    $members = json_encode($members);
    header('Content-Type: application/json');
    echo $members;
    exit;
}

$total = count($members);
echo $totalPassed;
echo $totalScripts;

// var_dump($message);

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
    <?php foreach ($messages as $output): ?>
    <?php if ($output['pass'] === true): ?>
   <p><?=($output['message']) . "Passed"?></?>
    <?php elseif ($output['pass'] === false): ?>
        <p><?=$output['message'] . " Failed"?> </p?>
    <?php endif;?>
    <?php endforeach;?>


</body>

</html>