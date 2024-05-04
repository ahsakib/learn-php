<?php
// ### Array Manipulation:
// - **Similar:**

// 11 array

// array_pop(): Removes the last element from an array and returns it.
// array_push(): Appends one or more elements to the end of an array.
// array_shift(): Removes the first element from an array and returns it.
// array_unshift(): Prepends one or more elements to the beginning of an array.
// array_slice(): Extracts a slice of an array.
// array_splice(): Removes a portion of the array and replaces it with something else.
// array_merge(): Combines one or more arrays into a single array.
// array_merge_recursive(): Recursively merges two or more arrays.
// array_replace(): Replaces the values of the first array with the values from following arrays.
// array_reverse(): Reverses the order of the elements in an array.
// array_chunk(): Splits an array into chunks of smaller arrays.
// array_combine(): Creates an array by using one array for keys and another for its values.
// array_fill(): Fills an array with a specific number of elements, all having the same value.

// - **Different:**
// array_diff(): Computes the difference of arrays. Returns an array containing all the values from the first array that are not present in any of the other arrays.
// array_intersect(): Computes the intersection of arrays. Returns an array containing all the values that are present in all of the input arrays.




// array_pop()
// $pop = ["apple","banana","orange"];
// $value = array_pop($pop);
// $main_array = $pop;
// print_r($value);
// print_r($main_array);


//array_push

// $push = ["apple","banana","orange"];
// $secondArray = [2,4,5,6];
// array_push($push,"watermelon",'shakib',$secondArray);

// print_r($push);


// array_slice();

// $slice=[1,2,3,5,7,9];

// $value = array_slice($slice,2);
// print_r($value);

// array_splice();

// $splice = [1,2,3,4,5,6,7,8,9];
// $value_with_extra_value = array_splice($splice,4,2,['shakib','anowar']);
// print_r($splice);


// array_merge()

// $array1 = ["apple", "banana"];
// $array2 = ["orange", "grape"];

// print_r(array_merge($array1,$array2));

// array_merge_recursive();

// $array1 = ["color" => ["red"], 5];
// $array2 = ["color" => ["green", "blue"], 10];

// print_r(array_merge_recursive($array2,$array1));

// array_replace();

// $array1 = [1,2,34,5];
// $array2 = [0=>"shakib",3=>"anowar"];

// print_r(array_replace($array1,$array2));

// array_fill()

// print_r(array_fill(0,10,'shakib'));