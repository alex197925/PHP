<?php 
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
  - Functions have their own local scope as opposed to global scope
*/

function registerUser($email) {
    echo $email . ' is Registered!';
}

//registerUser('Pablo');

// function sum($n1, $n2) {
//     return $n1 + $n2;
// }

//echo sum(3, 6); or
// $number = sum(3, 10);
// echo $number;


// Default params
function sum($n1 = 3, $n2 = 5) {
    return $n1 + $n2;
}

// echo sum();

// Anonymous function
$subtract = function($n1, $n2) {
    return $n1 - $n2;
};
// echo $subtract(10, 5);


// Arrow function
$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(5, 5);


?>