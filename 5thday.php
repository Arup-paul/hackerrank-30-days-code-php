<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);
 
  for($i=1;$i<=10;$i++){
      $result = $n*$i;
      echo $n. " x " .$i." = ".$result."\n";
  }


fclose($stdin);
?>