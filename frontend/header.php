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
            <div class='graphics-cards-container'>
                <div class='card-one'>
                    <p>Total Submissions</p>
                    <p><?=$totalScripts?></p>
                </div>
                <div style="cursor:pointer" onclick="window.location='?passed=true'"class='card-two'>
                    <p>Total Passed</p>
                    <p><?=$totalPassed?></p>
                </div>
                <div style="cursor:pointer" onclick="window.location='?failed=true'" class='card-three'>
                    <p>Failed</p>
                    <p><?=$totalScripts - $totalPassed?></p>
                </div>
            </div>