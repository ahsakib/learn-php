<?php

// 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.

// for ($i = 1; $i <= 10; $i++) {
//     // if ($i < 10) {
//     //     echo $i . "-";
//     // } else {
//     //     echo $i;
//     // }

//     if($i != 1){
//         echo "-";
//     }
//     echo $i;
// }


// 2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.

// $sum=0; 
// for($i=0;$i<=30;$i++){
//     $sum +=$i;
// }
// echo $sum;

// 3. Create a script to construct the following pattern, using nested for loop.

// *  
// * *  
// * * *  
// * * * *  
// * * * * *

// for($i=0;$i<5;$i++){

//       for($j=1;$j<=$i;$j++){
//         echo "* ";
//       }

//     echo "* " .PHP_EOL;
// };

// 4. Create a script to construct the following pattern, using a nested for loop.

// * 
// * * 
// * * * 
// * * * * 
// * * * * * 
// * * * * * 
// * * * * 
// * * * 
// * * 
// *

// for($i=5;$i>0;$i--){
//     for($j=1;$j<$i;$j++){
//         echo "* ";
//     }
//     echo "* " . PHP_EOL;
// }

// 5.Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.

// function factorial($n){
//     if($n==0){
//         return 1;
//     }
//     $result = $n * factorial($n-1);

//     return $result;
// }

// echo factorial(5);

// $factorial=1;

// for($i=4;$i>0;$i--){
//     $factorial *=$i;
// }

// echo $factorial;

// 6. Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format :
//     Sample output :
//     00, 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99,

// for ($x = 0; $x < 10; $x++) {
//     for ($y = 0; $y < 10; $y++) {
//         echo $x . $y . ", ";
//     }
// }

// 8. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag.

// 1 * 1 = 1	1 * 2 = 2	1 * 3 = 3	1 * 4 = 4	1 * 5 = 5
// 2 * 1 = 2	2 * 2 = 4	2 * 3 = 6	2 * 4 = 8	2 * 5 = 10
// 3 * 1 = 3	3 * 2 = 6	3 * 3 = 9	3 * 4 = 12	3 * 5 = 15
// 4 * 1 = 4	4 * 2 = 8	4 * 3 = 12	4 * 4 = 16	4 * 5 = 20
// 5 * 1 = 5	5 * 2 = 10	5 * 3 = 15	5 * 4 = 20	5 * 5 = 25
// 6 * 1 = 6	6 * 2 = 12	6 * 3 = 18	6 * 4 = 24	6 * 5 = 30

// for($i=1;$i<=6;$i++){
//     for($j=1;$j<=5;$j++){
//         echo "$i * $j = " . $i * $j . " ";
//     }
// }


// 13. Write a PHP program to print alphabet pattern 'A'.
// Expected Output:

//   ***                                                       
//  *   *                                                      
//  *   *                                                      
//  *****                                                      
//  *   *                                                      
//  *   *                                                      
//  *   *                                                      
//  *   *


// for ($row = 0; $row <= 7; $row++)
// {
//     // Loop for columns
//     for ($column = 0; $column <= 7; $column++)
//     {
//         // Condition to determine if '*' or ' ' should be printed
//         if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
//             echo "*";    // Print '*' if conditions are met
//         else  
//             echo " ";    // Print ' ' if conditions are not met
//     }        
//     echo "\n";  // Move to the next line after each row is printed
// }

