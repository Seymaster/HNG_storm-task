<?php
$log_directory = dirname(__FILE__);
// $files = [];
$path = $log_directory . '\scripts\*.*';

$output = array();
$res = array();
$final_res = array();
$fullnameRegex = "/\sis\s(.*)\swith/";
$idRegex = "/\sID\s(.*)\susing/";
$languageRegex = "/\susing\s(.*)\sfor/";

foreach (glob($path) as $key => $file) {
    $new = array();
    if (pathinfo($file)['extension'] == 'js') {
        exec("node $file", $output);
    } else if (pathinfo($file)['extension'] == 'py') {
        exec("python $file", $output);
    } else if (pathinfo($file)['extension'] == 'dart') {
        exec("dart $file", $output);
    } else if (pathinfo($file)['extension'] == 'php') {
        exec("php $file", $output);
    }

    if (preg_match("$fullnameRegex", $output[$key], $matches1)) {
        $new['full name'] = $matches1[1];
    }
    if (preg_match("$idRegex", $output[$key], $matches1)) {
        $new['ID'] = $matches1[1];
    }
    if (preg_match("$languageRegex", $output[$key], $matches1)) {
        $new['language'] = $matches1[1];
    }

    array_push($res, $new);
}


var_dump(json_encode($res, true));
ob_flush(); //flusing the output stream
