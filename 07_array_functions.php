<?php 
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/


$fruits = ['apple', 'orange', 'pear'];


// Get length
// echo count($fruits);


// Search array for specific value
// var_dump(in_array('orange', $fruits));


// Add to array
// $fruits[] = 'grape';

// Add with a array_push. The array_push() function inserts one or more elements at the end of an array.
array_push($fruits, 'banana', 'lemon', 'kiwi' );


// Add with array_unshift(). The array_unshift() function inserts one or more elements at the beginning of an array.
// array_unshift($fruits, 'mango', 'cherry');


// Remove from array
// 1. The array_pop() function removes the last element of an array.
//  array_pop($fruits);


// 2. The array_shift() function shifts or removes the first element from an array.
array_shift($fruits);

// 3. unset
// unset($fruits[1]);



// Split into 2 chunks. The array_chunk() function splits an array into chunks.
// $chunked_array = array_chunk($fruits, 3);
// print_r($chunked_array);

// print_r($fruits);



// 4. The array_merge() function merge one or more arrays into one array.

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = [...$arr1, ...$arr2];
// print_r($arr3);

// $result =  array_merge($arr1, $arr2);

// print_r($result);

// 5. The array_combine() function creates an array by using one array for keys and another for its values.
$a = ['red', 'green', 'yellow'];
$b = ['apple', 'avocado', 'banana'];

$result = array_combine($a, $b);
// print_r($result);

//  5.The array_keys() function return all the keys or a subset of the keys of an array.
$c = array_keys($result);
// print_r($c);


// 6. The array_flip() function flip or exchanges all keys with their associated values in an array, i.e. keys from the array become values and the values from the array become keys.
$flipped = array_flip($result);
// print_r($flipped);

// 7. The range() function creates an array containing a range of elements.
$numbers = range(0, 10);
// print_r($numbers);


// 8. The array_map() function applies a callback function to each element of an array and returns a new array with modified elements.
$newNumbers = array_map(function($number) {
    return "Number $number";
}, $numbers);

// print_r($newNumbers);


// 9. The array_filter() function filters the elements of an array using a callback function.
$filteredNumbers = array_filter($numbers, fn($number) => $number <= 5);
// print_r($filteredNumbers);

//  10. The array_reduce() function
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
// print_r($sum);



?>