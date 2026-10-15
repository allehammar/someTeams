<?php

require_once __DIR__ . '/data.php';

require_once __DIR__ . '/dataTeams.php';

$title = 'Information';

$teamName = $_GET['name'];

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Team Info</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="cards">
    <div class="card">
      <h1><?php echo $title ?></h1>
      <h3><?php echo $teamName; ?></h3>
      <p><?php echo $teamInfos[$teamName]['info']; ?></p>
    </div>
  </div>
</body>

</html>