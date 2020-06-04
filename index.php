<?php

//Get scripts
$folder = 'scripts';
$files = scandir($folder);

//Check if the script exists and set its command
function getScripts($files, $folder)
{
    $extensions = [
        'js' => 'node',
        'php' => 'php',
        'py' => 'python3',
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

function formatFileID($file)
{
    $file = explode("/", $file);
    $file = $file[1];
    $file = explode(".", $file);
    return $file[0];
    // var_dump($file);
    // exit;

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

$re = '/^Hello World, this is (?<first>\[\w+\])? (?<last>\[\w+\])? with HNGI7 ID (?<id>\[HNG-\d+\])? using (?<language>\[\w+\])? for stage 2 task. /i';

foreach ($content as $key => $data) {
    $output = trim($content[$key]['output']);
    $str = $output;
    $email = explode(" ", $str);
    $email = array_pop($email);
    $email = trim($email);

    $filename = $content[$key]['filename'];
    // var_dump($filename);
    // var_dump($email);
    // echo "<br>";
    // echo "<br>";
    // continue;

    $fileID = formatFileID($filename);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
        if ($matches) {
            foreach ($matches as $match) {
                $totalPassed++;
                $userData = $match[0];

                $data = preg_replace('/\[/i', '', $userData);
                $trimData = explode(".", trim($data));
                $data = preg_replace('/\]/i', '', $trimData[0]);

                $fullname = $match['first'] . ' ' . $match['last'];

                $fullname = preg_replace('/\[/i', '', $fullname);

                $fullname = preg_replace('/\]/i', '', $fullname);

                $messages[$fileID] = ['id' => $match['id'], 'message' => $data, 'name' => $fullname, 'pass' => true, 'filename' => $filename];

                $members[] = [
                    'output' => $data,
                    'id' => stripbrackets($match['id']),
                    'firstname' => stripbrackets($match['first']),
                    'lastname' => stripbrackets($match['last']),
                    'email' => $email,
                    'language' => stripbrackets($match['language']),
                    'filename' => $filename,
                    'status' => 'Pass',
                ];
            }
        } else {
            $userMessage = str_replace($email, '', $output);
            $userMessage = preg_replace('/\[/', '', $userMessage);
            $userMessage = preg_replace('/\]/', '', $userMessage);
            $messages[] = ['id' => $fileID, 'message' => $userMessage, 'pass' => false, "filename" => $filename, 'errors' => $fileID . ' failed eith invalid email.',
            ];

            $members[] = [
                'output' => $data,
                'id' => stripbrackets($match['id']),
                'firstname' => stripbrackets($match['first']),
                'lastname' => stripbrackets($match['last']),
                'email' => $email,
                'language' => stripbrackets($match['language']),
                'filename' => $filename,
                'status' => 'Fail',
            ];
        }
    } else {
        $output = $u ?? $fileID . ' failed: Script did not return an output';
        $failed = "Wrong Output";
        $messages[$fileID] = ['id' => $fileID, 'message' => $output, 'pass' => false, 'filename' => $filename, 'errors' => $failed];
        $members[] = [
            'output' => $data,
            'id' => 'Invalid',
            'firstname' => 'Invalid',
            'lastname' => 'Invalid',
            'email' => $email,
            'language' => 'Invalid',
            'filename' => $filename,
            'status' => 'Fail',
        ];
    }
}

if ($_SERVER['QUERY_STRING'] === 'json') {
    header('Content-Type: application/json');
    if (ob_get_level()) {
        ob_start();
    }

    $members = json_encode($members);
    echo $members;
    ob_flush();
    flush();
    exit;
}

if (isset($_GET['passed']) && $_GET['passed'] === 'true') {
    header('Content-Type: application/json');
    $passed = [];
    foreach ($messages as $output) {
        if ($output['pass'] === true) {
            $passed[] = $output;
        }
    }
    if (ob_get_level()) {
        ob_start();
    }

    $passed = json_encode($passed);
    echo $passed;
    ob_flush();
    flush();
    exit;

}

if (isset($_GET['failed']) && $_GET['failed'] === 'true') {
    header('Content-Type: application/json');
    $failed = [];
    foreach ($messages as $output) {
        if ($output['pass'] === false) {
            $failed[] = $output;
        }
    }

    $failed = json_encode($failed);
    echo $failed;
    exit;

}

$total = count($members);

// var_dump($members);
// echo "\n";
// exit;

include 'frontend/main.php';