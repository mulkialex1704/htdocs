<?php
for ($a = 1; $a <= 5; $a++){
   for ($z = 1; $z <= $a ; $z++){
      echo " &nbsp";
   }
  for($i = 5; $i >= $a; $i--){
      echo "*";
  }
  echo "<br>";
}