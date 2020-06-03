<?php


$extensions = [
    'js' => 'node',
    'php' => 'php',
    'py' => 'Python',
    'javac' => 'java',
];
$keys = [
    'firstName',
    'lastName',
    'language',
    'id',
];

$log_directory = $_SERVER['DOCUMENT_ROOT'] . 'scripts';
// var_dump($log_directory);
// exit;
$files = [];
$content = [];

foreach (glob($log_directory . '/*.*') as $file) {
    $files[] = $file;
}
// var_dump($files);
// exit;

foreach ($files as $file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);

    if (array_key_exists($ext, $extensions)) {
        $command = $extensions[$ext];
        $read = exec("{$command} {$file}");
        $temp = json_decode($read, true) ?? null;
        if ($temp) {
            $temp = array_keys($temp);
            if ($temp === $keys) {
                $content[] = json_decode($read, true);
            } else {
                $content[]['error'] = 'Wrong JSON format';
            }

        } else {
            $content[]['error'] = 'Wrong Keys Supplied';
        }

    } else {
        $content[]['error'] = 'Bad File Extension';
    }

}

if ($_SERVER['QUERY_STRING'] === 'json') {
    $content = json_encode($content);
    echo $content;
    exit;
}
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
    <?php foreach ($content as $data): ?>
     <?php if (isset($data['error'])): ?>
        <p><?=$data['error']?></p>
        <?php else: ?>
        <p><?="Hello World, this is " . $data['firstName'] . ' ' . $data['lastName'] . " with HNGi7 ID " . $data['id'] . ' ' . " using " . $data['language'] . " for stage two task"?></?>
        <?php endif;?>
    <?php endforeach;?>

</body>

</html>