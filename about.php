<?php
//Define variable for title later used with echo
$title = 'About Page';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Page</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!--Two divs with parent and child. That present title and common header-->
  <div class="startCards">
    <div class="startCard title aboutPage">
      <header>
        <h1><?php echo $title ?></h1>
      </header>
    </div>
  </div>
  <!--Two divs with parent and child. That present information about author with common card style. A button that go back to previous page-->
  <div class="cards">
    <div class="card authorInfo">
      <p>My name is Mattias Holgersson and I am the author of this page. As of now I am studying to become a web developer which is very exiting. In my spare time I like to play Magic the gathering and spend time at the gym. Human behavior, psychology, technical problem solving are some of the things i find very interesting. </p>
      <button onclick="history.back()">Go back</button>
    </div>
  </div>
</body>

</html>