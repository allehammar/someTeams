<?php
//Fetch data from the different arrays
require_once __DIR__ . '/data.php';

require_once __DIR__ . '/dataTeams.php';

//Define variable for title later used with echo
$title = 'Information';

//Define variable to be able to get the actual team the user clicked on and store it
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
  <!--Div with two boxes, parent and child. That echoes title, the team the user clicked on by fetching $key from data.php, the team info from dataTeams.php. A button that goes back to previous page-->
  <div class="cards">
    <div class="card">
      <h1><?php echo $title ?></h1>
      <h3><?php echo $teamName; ?></h3>
      <p><?php echo $teamInfos[$teamName]['info']; ?></p>
      <button onclick="history.back()">Go back</button>
    </div>
  </div>
</body>

</html>