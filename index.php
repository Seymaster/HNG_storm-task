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

function stripbrackets($data)
{
    $data = preg_replace('/\[/i', '', $data);

    $data = preg_replace('/\]/i', '', $data);
    return $data;

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
    $filename = $content[$key]['filename'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);       
        if ($matches) {
            foreach ($matches as $match) {
                $totalPassed++;
                $userData = $match[0];

                $data = preg_replace('/\[/i', '', $userData);
                $trimData = explode(".",trim($data));
                $data = preg_replace('/\]/i', '', $trimData[0]);

                $fullname = $match['first'] . ' ' . $match['last'];

                $fullname = preg_replace('/\[/i', '', $fullname);

                $fullname = preg_replace('/\]/i', '', $fullname);

                $messages[] = ['id' => $match['id'], 'message' => $data, 'name' => $fullname, 'pass' => true, 'filename' => $filename];

                $members[] = [
                    'output' => $data,
                    'id' => stripbrackets($match['id']), 
                    'firstname' => stripbrackets($match['first']), 
                    'lastname' => stripbrackets($match['last']), 
                    'email' => $email, 
                    'language' => stripbrackets($match['language']), 
                    'filename' => $filename, 
                    'status' => 'Pass'
                ];
            }
        } else {
            $userMessage = str_replace($email, '', $output);
            $userMessage = preg_replace('/\[/', '', $userMessage);
            $userMessage = preg_replace('/\]/', '', $userMessage);
            $messages[] = ['id' => 'Poorly Formated File', 'message' => $userMessage, 'pass' => false, "filename" => $filename];
            $members[] = [
                    'output' => $data,
                    'id' => stripbrackets($match['id']), 
                    'firstname' => stripbrackets($match['first']), 
                    'lastname' => stripbrackets($match['last']), 
                    'email' => $email, 
                    'language' => stripbrackets($match['language']), 
                    'filename' => $filename, 
                    'status' => 'Fail'
                ];
        }
    } else {
        $failed = "You did not provide a valid email address. Your String must return an email";
        $messages[] = ['id' => 'No Email Returned', 'message' => $failed, 'pass' => false, 'filename' => $filename];
        $members[] = [
                    'output' => $data,
                    'id' => 'Invalid', 
                    'firstname' => 'Invalid', 
                    'lastname' => 'Invalid', 
                    'email' => $email, 
                    'language' => 'Invalid', 
                    'filename' => $filename, 
                    'status' => 'Fail'
                ];
    }
}

if ($_SERVER['QUERY_STRING'] === 'json') {
    header('Content-Type: application/json');
    if(ob_get_level()) ob_start();

    $members = json_encode($members);    
    echo $members;
    ob_flush();
    flush();
    exit;
}

$total = count($members);
// echo $totalPassed;
// echo $totalScripts;

// var_dump($message);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team storm</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <style>
    table,
    .container {
        margin: 20px auto;
        max-width: 1000px;
    }

    .stat {
        color: white;
    }

    .team-name {
        font-size: 1.6rem;
        margin-bottom: 10px;
    }

    .leaders {
        display: flex;
        justify-content: space-between;
    }

    .leaders li a {
        text-decoration: underline;
    }

    body {
        font-weight: bold;
        padding: 1em;
    }

    .stat {
        display: flex;
        justify-content: space-between;
    }

    thead {
        color: #fff;
    }

    tbody {
        text-align: center;
        color: #fff;
    }

    table {
        margin-top: 100px;
    }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="team-name">TEAM STORM</div>
            <ul class="leaders">
                <li>Leads:</li>
                <li>
                    <a href="https://www.github.com/Seymaster">ESI - Backend</a>
                </li>
                <li>
                    <a href="https://www.github.com/joshuafolorunsho">__Josh__ - Frontend</a>
                </li>
                <li>
                    <a href="https://www.github.com/">Aj - devOps</a>
                </li>
            </ul>
        </div>
    </header>

    <div>
        <div class="container">
            <div class="stat">
                <p class="bg-green-500 px-2 py-3">Total Submission: <?=$totalScripts?></p>
                <p class="bg-green-500 px-2 py-3">Passed: <?=$totalPassed?></p>
                <p class="bg-red-500 px-2 py-3">Failed: <?=$totalScripts - $totalPassed?></p>
            </div>
        </div>
    </div>

    <table>
        <thead class="bg-blue-700">
            <tr>
                <th class="w-1/6 px-4 py-2">HNG ID</th>
                <th class="w-1/6 px-4 py-2">Name</th>
                <th class="w-1/2 px-4 py-2">Message</th>
                <th class="w-1/6 px-4 py-2">Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- use bg-green-500 class for passed -->
            <?php if(ob_get_level()) ob_start(); ?>
            <?php foreach ($messages as $output): ?>

            <?php if ($output['pass'] === true): ?>

            <tr class="bg-green-500">
                <td class="border px-4 py-2"><?=$output['id']?></td>
                <td class="border px-4 py-2"><?=$output['name']?></td>
                <td class="border px-4 py-2"><?=$output['message']?></td>
                <td class="border px-4 py-2">Pass</td>
            </tr>
            <?php elseif ($output['pass'] === false): ?>
            <tr class="bg-red-500">
                <td class="border px-4 py-2"><?=$output['id']?></td>
                <td class="border px-4 py-2"><?="Incorrect formatting from " . $output['filename']?></td>
                <td class="border px-4 py-2"><?=$output['message']?></td>
                <td class="border px-4 py-2">Fail</td>
            </tr>

            <?php endif;?>



            <!-- use bg-red-500 class for passed -->

        </tbody>
        <?php ob_flush(); flush(); ?>
        <?php endforeach;?>
    </table>
</body>

</html>
