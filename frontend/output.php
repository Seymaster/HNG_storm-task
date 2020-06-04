<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team storm</title>
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
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
            <a href="https://www.github.com/joshuafolorunsho"
              >__Josh__ - Frontend</a
            >
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
          <p class="bg-green-500 px-2 py-3">
            Total Submission:
            <?=$totalScripts?>
          </p>
          <p class="bg-green-500 px-2 py-3">
            Passed:
            <?=$total?>
          </p>
          <p class="bg-red-500 px-2 py-3">
            Failed:
            <?=$totalScripts - $totalPassed?>
          </p>
        </div>
      </div>
    </div>

    <table>
      <thead class="bg-blue-700">
        <tr>
          <th class="w-1/6 px-4 py-2">HNG ID</th>
          <th class="w-1/6 px-4 py-2">Name</th>
          <th class="w-1/2 px-4 py-2">Output</th>
          <th class="w-1/6 px-4 py-2">Filename</th>
        </tr>
      </thead>
      <tbody>
        <!-- use bg-green-500 class for passed -->
        <?php foreach ($messages as $key => $script): ?>
        <?php if (empty($script['error'])): ?>
        <tr class="bg-green-500">
          <td class="border px-4 py-2"><?=$script['id']?></td>
          <td class="border px-4 py-2"><?=$script['name']?></td>
          <td class="border px-4 py-2"><?=$script['output']?></td>
          <td class="border px-4 py-2"><a href="?file=<?=$key?>" target="_blank" rel="noopener noreferrer"><?=$script['filename']?></a></td>
        </tr>
        <?php else: ?>
        <tr class="bg-red-500">
          <td class="border px-4 py-2"><?="You have " . count($script['error']) . " error(s) in your script. Click filename for details"?></td>
          <td class="border px-4 py-2">Joshua Folorunsho</td>
          <td class="border px-4 py-2"><?=$script['output']?></td>
          <td class="border px-4 py-2"><a href="?file=<?=$key?>" target="_blank" rel="noopener noreferrer"><?=$script['filename']?></a></td>
        </tr>

        <?php endif;?>
      </tbody>
      <?php endforeach;?>
    </table>
  </body>
</html>
