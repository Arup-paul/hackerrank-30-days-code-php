<?php
//1st day
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
   $b = 12;
   $c = 4.0;
   $g = "is the best place to learn and practice coding!";
// Read and save an integer, double, and String to your variables.
     fscanf($handle,'%i',$b);
     fscanf($handle,'%f',$c);
     $g = fgets($handle);
// Print the sum of both integer variables on a new line.
   echo $i+$b;
   echo "\n";
// Print the sum of the double variables on a new line.
   printf("%.1f",$d+$c);
    echo "\n";
// Concatenate and print the String variables on a new line
  echo $s.$g;
// The 's' variable above should be printed first.

fclose($handle);
?>