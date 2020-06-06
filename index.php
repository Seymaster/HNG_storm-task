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
function stripbrackets($data)
{
    $data = preg_replace('/\[/i', '', $data);

    $data = preg_replace('/\]/i', '', $data);
    return $data;
}

function formatFileName($file)
{
    $file = explode("/", $file);
    $file = $file[1];
    return $file;
}

function outputKey($file)
{
    $file = explode(".", $file);
    $file = $file[0];
    return $file;
}

function validateString($string)
{
    $string = stripbrackets($string);
    if (preg_match('/\w/i', $string)) {

    }

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

$str = 'HNG-00197';

$str = 'PHP';
$i = 0;
foreach ($content as $key => $data) {

    $userData = [];
    $firstName = '';
    $lastName = '';
    $filename = formatFileName($content[$key]['filename']);
    $outputkey = outputKey($filename);
    $messages[$outputkey]['filename'] = $filename;

    $output = trim($content[$key]['output']);
    $str = $output;
    $str = explode(" ", $output);
    $messages[$outputkey]['expected_input'] = "Hello World, this is name name with HNGi7 ID [HNG-0000] with email [intern@gmail.com] using [PHP] for stage two task.";
    foreach ($str as $input) {
        //Regex that  match HNG-00000
        $id = '/^HNG-\d+/i';

        if (preg_match('/[\[\w+\d+\-@]]/i', $input)) {
            $userData[] = $input;
            $index = array_search($input, $str);
            unset($str[$index]);
        }
    }

    $str = implode(" ", $str);
    $re = $re = '/^Hello World,\sthis is (?<name>[\w\s]+ )with HNGi7 ID with email using for stage [two|2]+ task./i';
    if (!preg_match_all($re, $str)) {
        $message[$outputkey]['error'][] = "Your string does not match expected output";
        $messages[$outputkey]['output'] = $output;
        $messages[$outputkey]['pass'] = false;

    } else {
        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
        $name = trim($matches[0]["name"]);
        $name = explode(" ", $name);
        $firstName = $name[0];
        $lastName = $name[1];

        if (!empty($name)) {
            $otherNames = implode(" ", $name);
        }

    }

    if (empty($userData)) {
        $userID = '';
        $userEmail = '';
        $userLanguage = '';
        $messages[$outputkey]['error'][] = "You did not return the required parameters as required";
        $messages[$outputkey]['pass'] = false;
        if ($output === '') {
            $messages[$outputkey]['output'] = 'You script did not return an output';
        } else {
            $messages[$outputkey]['output'] = stripbrackets($output);
        }
    } else if (count($userData) === 3) {
        $userID = (stripbrackets($userData[0])) ? stripbrackets($userData[0]) : '';
        $userEmail = (stripbrackets($userData[1])) ? stripbrackets($userData[1]) : '';
        $userLanguage = (stripbrackets($userData[2])) ? stripbrackets($userData[2]) : '';
    } else {
        $messages[$outputkey]['pass'] = false;
        $messages[$outputkey]['error'][] = "Your are required to return exactly 3 parameters with your string: HNG ID, email, and programming language enclosed in square brackets";
        $messages[$outputkey]['output'] = stripbrackets($output);
    }

    if (preg_match($id, $userID)) {
        $messages[$outputkey]['id'] = $userID;
    } else {
        $messages[$outputkey]['pass'] = false;
        $messages[$outputkey]['error'][] = "Incorrect ID supplied";
    }

    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $messages[$outputkey]['email'] = $userEmail;
    } else {
        $messages[$outputkey]['pass'] = false;
        $messages[$outputkey]['error'][] = "Invalid Email";
    }

    if (empty($messages[$outputkey]['error']) && ($firstName
        !== '' && $lastName !== '')) {
        $members[$outputkey]['id'] = $userID;
        $members[$outputkey]['email'] = $userEmail;
        $members[$outputkey]['fistName'] = $firstName;
        $members[$outputkey]['lastName'] = $lastName;
        $members[$outputkey]['filename'] = $filename;
        $members[$outputkey]['language'] = $userLanguage;
        $members[$outputkey]['output'] = stripbrackets($output);

        if (!empty($otherNames)) {
            $members[$outputkey]['otherNames'] = $otherNames;
        } else {
            $members[$outputkey]['otherNames'] = null;
        }

        $messages[$outputkey]['pass'] = true;
        $messages[$outputkey]['id'] = $userID;
        $messages[$outputkey]['output'] = stripbrackets($output);
        $messages[$outputkey]['name'] = $firstName . ' ' . $lastName;
    }

}

if ($_SERVER['QUERY_STRING'] === 'json') {
    $members = json_encode($members);
    header('Content-Type: application/json');
    echo $members;
    exit;
}

<<<<<<< HEAD
$server = $_SERVER['QUERY_STRING'];

if (isset($_GET['file'])) {
    include 'frontend/fail.php';
    exit;

}

$total = count($members);

include 'frontend/output.php';
exit;
=======
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
        <?php endforeach;?>
    </table>
</body>

</html>
>>>>>>> 9e9589901095860f8d0b55cdf94ea5a6380231f8
