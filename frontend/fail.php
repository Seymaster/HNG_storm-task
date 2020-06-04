<?php

if (isset($_GET['file']) && !empty($_GET['file'])) {
    $file = strip_tags($_GET['file']);

    if (array_key_exists($file, $messages)) {
        $details = $messages[$file];

        $details = json_encode($details);
        header('Content-Type: application/json');
        echo $details;
        exit;
    } else {
        $details = ['error' => "No record of this script"];
        $details = json_encode($details);
        header('Content-Type: application/json');
        echo $details;
        exit;
    }

} else {
    header("Location: index.php");
}
