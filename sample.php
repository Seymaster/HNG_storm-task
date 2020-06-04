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

// Regex Validation string
$pattern =
'/^Hello\sWorld[,]*\sthis\sis\s(\w+\s){1,6}(\w+\s){1,6}with\sHNGi7\sID\s(HNG-\d+)\sand\semail\s([-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4})\susing\s([a-zA-Z|#]{2,})\sfor\sstage\s2\stask.?$/i';

        foreach ($content as $key => $data) {
                $output = $content[$key]['output'];
                $str = $output;
                $userMessage = $output;
                $matcher = preg_match($pattern,$str,$matches);
                $filename = $content[$key]['filename'];
        if ($matches) {
                $useroutput = $matches[0];
                $totalPassed++;
                $fullname = $matches[1] . ' ' . $matches[2];
                $messages[] = ['id' => $matches[3], 'message' => $matches[0], 'name' => $fullname, 'pass' => true, 'filename' =>
                $filename];
                $members[] = ['id' => $matches[3], 'firstname' => $matches[1], 'lastname' => $matches[2], 'email' => $matches[4],
                'language' => $matches[5], 'filename' => $filename, 'output' => $useroutput, 'status'=>'Pass'];
        } else {
                $useroutput = $str;
                $messages[] = ['id' => 'Poorly Formated File', 'message' => $userMessage, 'pass' => false, "filename" => $filename];
                $members[] = ['id' => 'null', 'firstname' => 'null', 'lastname' => 'null', 'email' => 'null', 'language' => 'null',
                'filename' => $filename, 'output' => $useroutput, 'status'=>'Fail'];
        }

}

if ($_SERVER['QUERY_STRING'] === 'json') {
$members = json_encode($members);
header('Content-Type: application/json');
echo $members;
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
            <?php foreach ($messages as $output): ?>

            <?php if ($output['pass'] === true): ?>

            <tr class="bg-green-500">
                <td class="border px-4 py-2"><?=$output['id']?></td>
                <td class="border px-4 py-2"><?=$output['name']?></td>
                <td class="border px-4 py-2"><?=$output['message']?></td>
                <td class="border px-4 py-2">Passed</td>
            </tr>
            <?php elseif ($output['pass'] === false): ?>
            <tr class="bg-red-500">
                <td class="border px-4 py-2"><?=$output['id']?></td>
                <td class="border px-4 py-2"><?="Incorrect formatting from " . $output['filename']?></td>
                <td class="border px-4 py-2"><?=$output['message']?></td>
                <td class="border px-4 py-2">Failed</td>
            </tr>

            <?php endif;?>



            <!-- use bg-red-500 class for passed -->

        </tbody>
        <?php endforeach;?>
    </table>
</body>

</html>