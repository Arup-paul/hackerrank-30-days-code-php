<?php


//2nd day

Complete the solve function below.
function solve($meal_cost, $tip_percent, $tax_percent) {
  $meal_cost = 12.0;
  $tip_percent=20;
  $tax_percent = 8;

}

$stdin = fopen("php://stdin", "r");

      $meal_cost = (float) fgets($stdin);
      $tip_percent = (float) fgets($stdin);
      $tax_percent = (float) fgets($stdin);

 $tip = $meal_cost*($tip_percent/100);
  $tax = $meal_cost*($tax_percent/100);
  $totalCost = $meal_cost+$tip+$tax;
  $totalCost = round($totalCost);
  echo $totalCost;

fscanf($stdin, "%lf\n", $meal_cost);

fscanf($stdin, "%d\n", $tip_percent);

fscanf($stdin, "%d\n", $tax_percent);

solve($meal_cost, $tip_percent, $tax_percent);

fclose($stdin);



?>