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