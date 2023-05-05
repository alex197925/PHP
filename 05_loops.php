<?php 
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x=0; $x <= 10; $x++) { 
//     echo $x;
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $y = 1;
// while ($y <= 15) {
//     echo 'Number ' . $y . '<br>';
//     $y++;
// }



/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;
// do{
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while ($x <= 10);
 

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax USING for ARRAY
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

// For loop
// for ($x=0; $x < count($posts) ; $x++) { 
//     echo $posts[$x];
// }

// ForEach loop
// foreach ($posts as $post){
//    echo $post;
// }

// Get index
// foreach ($posts as $index => $post){
//     echo $index . ' - ' . $post . '<br>';
//  }

// Get key and value
$person = [
    'first_name' => 'Brad',
    'last_name' => 'Cooper',
    'email' => 'brad@gmail.com',
    'age' => 34
];

// foreach($person as $key => $value){
//     echo "$key - $value <br>";
// }



?>