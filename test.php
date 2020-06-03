<?php

//Get scripts
$files = scandir('scripts');
$content = [];

function getScripts($files)
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
            $scripts[] = ['name' => 'scripts/' . $file, 'command' => $extensions[$ext]];

        }
    }

    return $scripts;

};

$scripts = getScripts($files);

foreach ($scripts as $key => $script) {
    if (file_exists($scripts[$key]['name'])) {
        $read = exec("{$scripts[$key]['command']} {$scripts[$key]['name']}");
        $content[] = $read;

    }

}
var_dump($content);
// var_dump($file);
