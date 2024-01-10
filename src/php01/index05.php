<?php
// for文
// for ($i = 5; $i <= 30; $i++) {
//   echo $i+34 . '<br />';
//   echo $1 ;
// }


// while文
// $count = 0;
// while ($count <= 100){
// if($count === 20){
//         break;
//     }
//     if($count % 3 === 0){
//         $count++;
//         continue;
//     }
//     echo $count . "<br />";
//     $count++;
// }


// do while文
// $nume = 0;
// do {
//   echo "num = " .$nume. '<br />';
//   $nume++;
// } while ($nume< 3);

// // FizzBuZZ問題
// $Fizz = "Fizz";
// $Buzz = "Buzz";
// $FizzBuzz = "FizzBuzz";

// for($a=1; $a<=50; $a++){

// if($a % 15 == 0){
//     echo $FizzBuzz .'<br />';
// }else if($a % 5 == 0){
//     echo $Buzz .'<br />';
// }else if($a % 3 == 0){
//     echo $Fizz .'<br />';
// }else{
//     echo $a .'<br />';
// }

// }


for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}
