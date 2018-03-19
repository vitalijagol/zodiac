<?php



function zodiac($year) {
$yearmod = $year % 12;
switch ($yearmod) {
  case 0: echo "Monkey"; break;
  case 1: echo "Rooster"; break;
  case 2: echo "Dog"; break;
  case 3: echo "Pig"; break;
  case 4: echo "Rat"; break;
  case 5: echo "Ox"; break;
  case 6: echo "Tiger"; break;
  case 7: echo "Rabit"; break;
  case 8: echo "Dragon"; break;
  case 9: echo "Snake"; break;
  case 10: echo "Horse"; break;
  case 11: echo "Goat"; break;
}
}

?>
<p>Enter your birth year</p>
 <form method="post">
      <input type="text" name="year">
      <button type="submit" name="submit" value="submit">Submit</button>
    </form>

 <?php
 
 if (isset($_POST["year"])) {
     if (is_numeric($_POST["year"])) {
        zodiac($_POST["year"]);
     }
    else {
        echo "Enter your birth year"; 
    }
 }
 

 ?>