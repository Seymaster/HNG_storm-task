<?php

    $datas = [
        'firstname' => 'Meledje',
        'lastname' => 'Gnagne Christian Armel',
        'language' => 'PHP',
        'ID' => 'HNG-05233',
    ];

    function loadConsole ($datas)
    {
        $json = json_encode($datas);
        echo '<script>
                let datas = '.$json.'
                console.log("Hello World, this is [" + datas.firstname + "] [" +  datas.lastname + "] with HNGi7 ID [" + datas.ID + "] using [" + datas.language + "] for stage 2 task. meledjearmel@gmail.com")
              </script>';
        return (object) $datas;
    }

    $datas = loadConsole($datas);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Team Storm</title>
    </head>
    <body>
        <p>Hello World, this is [<?= $datas->firstname ?>] [<?= $datas->lastname ?>] with HNGi7 ID [<?= $datas->ID ?>] using [<?= $datas->language ?>] for stage 2 task. meledjearmel@gmail.com</p>
    </body>
    </html>