<?php
/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age = 20;
// if ($age >= 18) {
//     # code...
//     echo 'You are old enough to vote!!';
// }else{
//     echo 'You have to be older to vote!!';
// }


// $t = date('H');


// if ($t < 12) {
//   echo "Good Morning";
// } elseif ($t < 17) {
//   echo "Good Afternoon";
// } else {
//   echo "Good Evening";
// }

// echo $t;


$posts = ['First Post'];

// if(!empty($posts)) {
//   echo $posts[0];
// }else {
//   echo "No Post";
// }

// echo !empty($posts) ? $posts[0] : "No Post";
// $firstPost =  !empty($posts) ? $posts[0] : "No Post";
// $firstPost = $posts[0] ?? null;
// echo $firstPost;



// SWITCH

$favorite_color = 'red';

switch ($favorite_color) {
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'red':
     echo 'Your favorite color is red';
     break;
  case 'pink':
     echo 'Your favorite color is pink';
     break;
  default:
    echo 'Your favorite color not blue, red or pink';
    break;
}
?>