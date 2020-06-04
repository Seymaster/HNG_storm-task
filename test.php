<?php

//Get scripts
$files = scandir('scripts');
$members = [];

function getScripts($files)
{
    $extensions = [
        'js' => 'node',
        'php' => 'php',
        'py' => 'Python',
        'javac' => 'java',
        'dart' => 'dart',
    ];

    foreach ($files as $file) {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        // var_dump($ext);
        if (array_key_exists($ext, $extensions)) {
            $scripts[] = ['name' => 'scripts/' . $file, 'command' => $extensions[$ext], 'filename' => $file];

        }
    }

    return $scripts;

};

$scripts = getScripts($files);

foreach ($scripts as $key => $script) {
    if (file_exists($scripts[$key]['name'])) {
        $read = exec("{$scripts[$key]['command']} {$scripts[$key]['name']}");
        $content[] = ['output' => $read, 'filename' => $scripts[$key]['command']];
    }

}
$re = '/^Hello World, this is (?<first>\[\w+\])? (?<last>\[\w+\])? with HNGI7 ID (?<id>\[HNG-\d+\])? using (?<language>\[\w+\])? for stage 2 task. /i';

foreach ($content as $key => $data) {
    $output = $content[$key]['output'];
    $str = $output;
    $email = explode(" ", $str);
    $email = array_pop($email);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
        $filename = $content[$key]['filename'];
        if ($matches) {
            foreach ($matches as $match) {
                $userData = $match[0];

                $data = preg_replace('/\[/i', '', $userData);

                $data = preg_replace('/\]/i', '', $data);

                $message[] = ['message' => $data, 'pass' => true];

                $members[] = ['id' => $match['id'], 'firstname' => $match['first'], 'lastname' => $match['last'], 'email' => $email, 'language' => $match['language'], 'filename' => $filename];
            }
        } else {
            $userMessage = str_replace($email, '', $output);
            $userMessage = preg_replace('/\[/', '', $userMessage);
            $userMessage = preg_replace('/\]/', '', $userMessage);
            $message[] = ['message' => $userMessage, 'pass' => false];

        }

    } else {
        $failed = "You did not provide a valid email address. Your String must return an email";
        $message[] = ['message' => $failed, 'pass' => false];
    }

}
var_dump($members);
var_dump($message);
