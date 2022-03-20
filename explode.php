<?php

// string to array
$date = "3/20/2022";  // 20 March, 2022

// $result = explode("/", $date);

// $day = $result[1];
// $month = $result[0];
// $year = $result[2];

// switch($month) {
//     case 1:
//         $month = "Jan";
//     break;
//     case 2:
//         $month = "Feb";
//     break;
//     case 3:
//         $month = "March";
//     break;
// }

// echo "$day $month, $year";

// array to string

// $user = ["Mg Mg", 23, "Yangon"];  //Mg Mg, 23, Yangon

// $result = implode(",", $user);

// echo $result;


$fruits = ["banana", "apple"];

$fruits = [...$fruits, "orange", "mango"];

print_r($fruits);