<?php
// $file = 'echo.php';

// if (file_exists($file)) {
//     $file = dirname(__DIR__) . '/test/' . $file;
//     shell_exec("node " . $file);
// }

// $output = shell_exec('ls');

// $output = explode(" ", $output);

// var_dump($output);
// $file = dirname(__DIR__) . '/test/' . $file;

// include 'script.js';

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// $read = exec("node script.js");

// echo $read;
$log_directory = dirname(__FILE__);
$files = [];

foreach (glob($log_directory . '/*.*') as $file) {
    $files[] = $file;
}

foreach ($files as $file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if ($ext === 'js') {
        $read = exec("node {$file}");
        echo $read . "\n";
    }
}
