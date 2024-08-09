<?php
//if operator
// if (5>3) {
//     echo "hey";
// }
// echo",my name is nade ";

// $t=14;
// if ($t==14) {
//     echo"Beginner";
// }
// $a=200;
// $b=33;
// $c=500;

// if ($a > $b and $a < $c) {
//     echo"both conditions are true";
// }

// $a = 6;

// if ($a ==2 || $a==3 || $a==4 || $a==5 || $a==6 ||    $a==7) {
//    echo" $a is a numb between 5 and 7";
// }

            // If---else 
            
            //     if ($t < "1") {
                //         echo "Have a good day!";
                //     } else {
                    //         echo"go to home Now!!";
                    //     }
  $t = date("H");

  if ($t >= "12") {
   echo"have a good day";
  } elseif ($t >= "13") {
    echo "have a lot work to do ";
  } else {
    echo"go to sleep";
  }
  


?>