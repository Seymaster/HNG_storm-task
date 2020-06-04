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
        'py' => 'python',
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
function stripbrackets($data)
{
    $data = preg_replace('/\[/i', '', $data);

    $data = preg_replace('/\]/i', '', $data);
    return $data;
}

function formatFileName($file)
{
    $file = explode("/", $file);
    $file = $file[1];
    return $file;
}

function outputKey($file)
{
    $file = explode(".", $file);
    $file = $file[0];
    return $file;
}

function validateString($string)
{
    $string = stripbrackets($string);
    if (preg_match('/\w/i', $string)) {

    }

}

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

$str = 'HNG-00197';

$str = 'PHP';
$i = 0;
foreach ($content as $key => $data) {

    $userData = [];
    $firstName = '';
    $lastName = '';
    $filename = formatFileName($content[$key]['filename']);
    $outputkey = outputKey($filename);
    $messages[$outputkey]['filename'] = $filename;

    $output = trim($content[$key]['output']);
    $str = $output;
    $str = explode(" ", $output);
    $messages[$outputkey]['expected_input'] = "Hello World, this is name name with HNGi7 ID [HNG-0000] with email [intern@gmail.com] using [PHP] for stage two task.";
    foreach ($str as $input) {
        //Regex that  match HNG-00000
        $id = '/^HNG-\d+/i';

        if (preg_match('/[\[\w+\d+\-@]]/i', $input)) {
            $userData[] = $input;
            $index = array_search($input, $str);
            unset($str[$index]);
        }
    }

    $str = implode(" ", $str);
    $re = $re = '/^Hello World,\sthis is (?<name>[\w\s]+ )with HNGi7 ID with email using for stage [two|2]+ task./i';
    if (!preg_match_all($re, $str)) {
        $message[$outputkey]['error'][] = "Your string does not match expected output";
        $messages[$outputkey]['output'] = $output;
        $messages[$outputkey]['pass'] = false;

    } else {
        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
        $name = trim($matches[0]["name"]);
        $name = explode(" ", $name);
        $firstName = $name[0];
        $lastName = $name[1];

        if (!empty($name)) {
            $otherNames = implode(" ", $name);
        }

    }

    if (empty($userData)) {
        $userID = '';
        $userEmail = '';
        $userLanguage = '';
        $messages[$outputkey]['error'][] = "You did not return the required parameters as required";
        $messages[$outputkey]['pass'] = false;
        if ($output === '') {
            $messages[$outputkey]['output'] = 'You script did not return an output';
        } else {
            $messages[$outputkey]['output'] = stripbrackets($output);
        }
    } else if (count($userData) === 3) {
        $userID = (stripbrackets($userData[0])) ? stripbrackets($userData[0]) : '';
        $userEmail = (stripbrackets($userData[1])) ? stripbrackets($userData[1]) : '';
        $userLanguage = (stripbrackets($userData[2])) ? stripbrackets($userData[2]) : '';
    } else {
        $messages[$outputkey]['pass'] = false;
        $messages[$outputkey]['error'][] = "Your are required to return exactly 3 parameters with your string: HNG ID, email, and programming language enclosed in square brackets";
        $messages[$outputkey]['output'] = stripbrackets($output);
    }

    if (preg_match($id, $userID)) {
        $messages[$outputkey]['id'] = $userID;
    } else {
        $messages[$outputkey]['pass'] = false;
        $messages[$outputkey]['error'][] = "Incorrect ID supplied";
    }

    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $messages[$outputkey]['email'] = $userEmail;
    } else {
        $messages[$outputkey]['pass'] = false;
        $messages[$outputkey]['error'][] = "Invalid Email";
    }

    if (empty($messages[$outputkey]['error']) && ($firstName
        !== '' && $lastName !== '')) {
        $members[$outputkey]['id'] = $userID;
        $members[$outputkey]['email'] = $userEmail;
        $members[$outputkey]['fistName'] = $firstName;
        $members[$outputkey]['lastName'] = $lastName;
        $members[$outputkey]['filename'] = $filename;
        $members[$outputkey]['language'] = $userLanguage;
        $members[$outputkey]['output'] = stripbrackets($output);

        if (!empty($otherNames)) {
            $members[$outputkey]['otherNames'] = $otherNames;
        } else {
            $members[$outputkey]['otherNames'] = null;
        }

        $messages[$outputkey]['pass'] = true;
        $messages[$outputkey]['id'] = $userID;
        $messages[$outputkey]['output'] = stripbrackets($output);
        $messages[$outputkey]['name'] = $firstName . ' ' . $lastName;
    }

}

if ($_SERVER['QUERY_STRING'] === 'json') {
    $members = json_encode($members);
    header('Content-Type: application/json');
    echo $members;
    exit;
}

$server = $_SERVER['QUERY_STRING'];

if (isset($_GET['file'])) {
    include 'frontend/fail.php';
    exit;

}

$total = count($members);

include 'frontend/output.php';
exit;
