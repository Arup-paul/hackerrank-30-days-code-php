<?php


//day 3
$handle = fopen("php://stdin", "r");
fscanf($handle, "%d\n", $test);

if($test%2!=0){
    echo "Weird";
}else{
    switch($test){
        case($test>21):
            echo "Not Weird";
            break;     
         case($test>=2 && $test<=5):
            echo "Not Weird";
            break;      
          case($test >=6 && $test <=20):
            echo "Weird";
            break;
    }
}

//or 

if($test%2 != 0){
    echo "Weird";
}else{
    if($test >=6 && $test <=20){
        echo "Weird";
    }elseif($test>=2 && $test<=5){
        echo "Not Weird";
    }elseif($test > 21){
         echo "Not Weird";
    }
}

fclose($handle);


?>