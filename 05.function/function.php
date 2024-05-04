<?php

// There are two types function in php\
// built-in-function
// user defined function

// calling by value


// $abc=10;
// function test($abc){
//     $abc = 15;
//     return $abc;
// }
// test($abc);
// print $abc;
// print "\n";

// here after calling function $abc value not changed, it call calling by value function


// calling by reference

// $abc=10;
// function test(&$abc){
//     $abc = 15;
//     return $abc;
// }
// test($abc);
// print $abc;
// print "\n";

// function  change_name(&$nm) {
//     echo "Initially the name is $nm" . PHP_EOL;
//     $nm = $nm."_new";
//     echo "This function changes the name to $nm" . PHP_EOL;
//  }

//  $name = "John";
//  echo "My name is $name" . PHP_EOL;
//  change_name($name);
//  echo "My name now is $name" . PHP_EOL;

// jokon ami calling by reference function call korbo, tokon function call korar por, je argument pass korsi seitar value baire theke paoya jabe 


// Named Arguments

// function  myfunction($x, $y) {
//     echo "x = $x  y = $y";
//  }

//  myfunction(x:10, y:20);

// function namedArgument($name1,$name2){
//     echo "shakib = $name1 anowar = $name2";
// }

// namedArgument(name1:"shakib",name2:"anowar");

// function nameArray($x,$y,$z){
//     echo "x = $x y = $y z = $z";
// }

// nameArray(...[34, 20], z:230);

// variable argument

// function avg(...$num){
    // echo array_sum($num)/count($num);

    // $sum = 0;

    // for($i=0; $i<count($num);$i++){
    //     $sum += $num[$i];
    // }

    // echo $sum;



    

// }

// avg(10,7,3,20);


// passing function 
// array_map()

// function Square($number){
//     return $number * $number;
// }

// $arr = [7,2,3,4,5,6];

// $result=array_map("Square",$arr);
// print_r($result);

// Recursive Functions

// A recursive function is such a function that calls itself until a certain condition is satisfied. In PHP, it is possible to defines a recursive function.

// make factorial using recursive function



// function factorial($n){
//     if($n == 0){
//         return 1;
//     }else{
//         echo "$n * ";
//         return $n*factorial($n-1);
//     }
// }

// echo factorial(5);


//anonymous function

// $anonymousf = function($x){
//     echo $x;
// };

// $anonymousf("shakib");

// arrow function

$myArrowFunction = fn($arg1, $arg2) => $arg1 + $arg2;

$arr=[500,425,6,5];
$result=array_map((fn($n)=>$n*$n),$arr);
print_r($result);