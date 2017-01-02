<?php

$player1 =5;
$player2= 0;
$round = 0;

// var_dump(abs($player1 - $player2));
// var_dump($player2 - $player1);
while(abs($player1- $player2) < 2 || ($player1 < 11 && $player2 < 11)){
    $round++;
    echo "<h2>round $round </h1>";
    if(rand(0, 1)){
        $player1++;
    }else{
      $player2++;
    }
    echo "Player1 =  $player1 <br/>";
    echo "Player2 =  $player2 <br/>";
}



// WIN
//player must reach a score of 11
echo "<h1>";
if ($player1 > $player2) {
  echo "player 1";
}else{
  echo "player2";
}


echo " is the winner after $round rounds";

echo "</h2>";
//player must be a minimun of 2 point higher than oponent






 ?>
