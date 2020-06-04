<?php
// error_reporting(E_ERROR | E_PARSE);

//Get scripts
$folder = 'scripts';
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
            // $messages[] = ['id' => 'Poorly Formated File', 'message' => $userMessage, 'pass' => false, "filename" => $filename];
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
        // $messages[] = ['id' => 'No Email Returned', 'message' => $failed, 'pass' => false, 'filename' => $filename];
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <title>HNGi7 | Team Storm</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        color: #707070;
        font-family: sans-serif;
    }

    header {
        width: 100vw;
        height: 100px;
        display: flex;
        align-items: center;
        padding-top: 50px;
        margin-bottom: 30px;
    }

    h1 {
        width: 350px;
        text-align: center;
        color: #6FE3FF;
        text-transform: uppercase;
        font-size: 1.7rem;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 0.07em;
    }

    .leads-container {
        padding: 0 20%;
        width: 100%;
        /* background-color: aqua; */
        display: flex;
        justify-content: space-between;
    }

    .leads-container div p:nth-of-type(1) {
        font-weight: 900;
        margin-bottom: 5px;
    }

    .leads-container div p:nth-of-type(2) {
        font-weight: lighter;
    }

    .flex {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .list-color {
        height: 20px;
        width: 20px;
        background-color: #6FE3FF;
        margin-right: 10px;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 250px 1fr;
        grid-template-rows: auto;
        grid-template-areas: 'aside main';
    }

    aside {
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 100px;
    }

    aside h3 {
        font-size: 1.6rem;
        margin-bottom: 40px;
    }

    aside button {
        background-color: #6FE3FF;
        margin-bottom: 40px;
        border: none;
        outline: none;
        padding: 10px 40px;
        color: white;
        border-radius: 4px;
        cursor: pointer;
    }

    section {
        padding: 30px;
        background-color: #F5F5F5;
    }

    .graphics-cards-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .graphics-cards-container div {
        flex-grow: 1;
        height: 120px;
        margin: 10px;
        border-radius: 10px;
        padding: 20px;
        color: white;
        padding-top: 30px;
    }

    .graphics-cards-container div p {
        margin-bottom: 14px;

    }

    .graphics-cards-container div p:nth-of-type(2) {
        font-size: 2rem;
        font-weight: lighter;
    }

    .card-one {
        background-color: #6FE3FF;
    }

    .card-two {
        background-color: #51B25C;
    }

    .card-three {
        background-color: #FF6565;
    }

    .table--container {
        overflow-x: auto;
    }

    table {
        width: 100%;
        /* min-width: 600px; */
        background-color: white;
        border-radius: 10px;
        text-align: left;
        padding: 20px 40px;
        /* overflow-x: auto; */
    }


    table th,
    table td {
        height: 50px;
        vertical-align: middle;
        text-align: center;
        border-bottom: 1px solid #ddd;
        padding: 20px 0;
    }



    .pass {
        background-color: #51B25C;
        color: white;
        padding: 4px;
        margin: auto;
        width: 85%;
    }

    .fail {
        background-color: #FF6565;
        color: white;
        padding: 4px;
        margin: auto;
        width: 80%;
    }

    @media (max-width: 1000px) {
        .grid-container {
            grid-template-columns: 200px 1fr;
        }

        section {
            padding: 20px;
        }

        h1 {
            width: 200px;
            font-size: 1.5rem
        }
    }

    @media (max-width: 786px) {
        .grid-container {
            display: block;
        }

        aside {
            padding: 20px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            /* padding-top: 100px; */
        }

        aside h3 {
            margin-right: 30px;
        }

        .leads-container {
            padding: 0 10%;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
    }

    @media (max-width: 400px) {
        header {
            display: block;
            padding-top: 10px;
        }

        h1 {
            display: block;
            width: 100%;
            padding-bottom: 20px;
        }

        table {
            overflow: auto;
        }
    }
    </style>
</head>

<body>
    <header>
        <h1>Team Storm</h1>
        <div class='leads-container'>
            <div>
                <p>@Esi</p>
                <p>Team Lead</p>
            </div>
            <div>
                <p>@__josh__</p>
                <p>Frontend Lead</p>
            </div>
            <div>
                <p>Aj</p>
                <p>DevOps</p>
            </div>
        </div>
    </header>
    <main class='grid-container'>
        <aside>
            <h3>Team List</h3>
            <button onclick="window.location='?json'">View Json List</button>
        </aside>
        <section>
            <div class='flex'>
                <div class="list-color"></div>
                <h5>Team List</h5>
            </div>
            <div class='graphics-cards-container'>
                <div class='card-one'>
                    <p>Total Submissions</p>
                    <p><?=$totalScripts?></p>
                </div>
                <div class='card-two'>
                    <p>Total Passed</p>
                    <p><?=$totalPassed?></p>
                </div>
                <div class='card-three'>
                    <p>Failed</p>
                    <p><?=$totalScripts - $totalPassed?></p>
                </div>
            </div>
            <div class='table-container'>
                <table>
                    <thead>
                        <tr>
                            <th>HNGID</th>
                            <th>Name</th>
                            <!-- <th>Email</th> -->
                            <th>Message</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- use bg-green-500 class for passed -->
                        <?php if(ob_get_level()) ob_start(); ?>
                        <?php foreach ($messages as $output): ?>

                        <?php if ($output['pass'] === true): ?>

                        <tr>
                            <td><?=$output['id']?></td>
                            <td><?=$output['name']?></td>
                            <td><?=$output['message']?></td>
                            <td>
                                <div class='pass'>Pass</div>
                            </td>
                        </tr>
                        <?php elseif ($output['pass'] === false): ?>
                        <tr>
                            <td><?=$output['output']['output']?></td>
                            <td"><?="Incorrect formatting from " . $output['filename']?></td>
                                <td"><?=$output['message']?></td>
                                    <td>
                                        <div class='fail'>Fail</div>
                                    </td>
                        </tr>

                        <?php endif;?>

                        <?php ob_flush(); flush(); ?>
                        <?php endforeach;?>
                        <?php ob_end_flush(); ?>
                        <!-- <tr>
                            <td>12334455</td>
                            <td>Adedeji Abiola</td>
                            <td>Dejiabiola@yahoo.com</td>
                            <td>Hello World</td>
                            <td>
                                <div class='pass'>Pass</div>
                            </td>
                        </tr>
                        <tr>
                            <td>12334455</td>
                            <td>Adedeji Abiola</td>
                            <td>Dejiabiola@yahoo.com</td>
                            <td>Hello World</td>
                            <td>
                                <div class='pass'>Pass</div>
                            </td>
                        </tr>
                        <tr>
                            <td>12334455</td>
                            <td>Adedeji Abiola</td>
                            <td>Dejiabiola@yahoo.com</td>
                            <td>Hello World</td>
                            <td>
                                <div class='pass'>Pass</div>
                            </td>
                        </tr>
                        <tr>
                            <td>12334455</td>
                            <td>Adedeji Abiola</td>
                            <td>Dejiabiola@yahoo.com</td>
                            <td>Hello World</td>
                            <td>
                                <div class='fail'>Fail</div>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>

</html>