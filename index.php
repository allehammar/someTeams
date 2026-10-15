<?php
//Fetch data from the different arrays
require_once __DIR__ . '/data.php';

require_once __DIR__ . '/header.php';

?>

<div class="cards">
  <ul>
    <?php
    //Foreach loop that loop through all teams and present each value within the team name as a h3 tag
    foreach ($teams as $key => $value) :
    ?>
      <div class="card">
        <li>
          <h3><?php echo $key . ": " ?></h3>
        </li>
        <!--Echo all the data/values from data.php for each team. A button with an a tag that send the user to the thirdPage and depending on which team the user cliked the name= of that team will be presented-->
        <li><?php echo "League: " . $value['league'] ?></li>
        <li><?php echo  "Uefa-coefficient-ranking: " . $value['uefa-coefficient-ranking'] ?></li>
        <li><?php echo "League-position: " . $value['league-position'] ?></li>
        <li><?php echo "City: " . $value['city'] ?></li>
        <li><a href="<?php echo ($value['url']) ?>">Link to homepage</a></li>
        <li><img src="<?php echo ($value['logo_uefa']) ?>" alt="Team Logo"></li>
        <li><a href="<?php echo 'thirdPage.php?name=' . $key ?>"><button>More info!</button></a></li>
      </div>
    <?php
    endforeach;
    ?>

  </ul>
</div>

</body>

</html>