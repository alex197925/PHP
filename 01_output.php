<?php  // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/* ------- Outputting Content ------- */

// Echo - Output strings, numbers, html, etc
// echo 'Hello', 123, 12.9;
// echo 1;
// echo 2;
// echo '<h1>Hello World</h1>';

// print - Similar to echo, but a bit slower
// print 'Hello';

// print_r - Gives a bit more info. Can be used to print arrays
// print_r([1,2,3,]);


// var_dump - Even more info like data type and length
// var_dump('Hello');
// var_dump(true);

// var_export() - Similar to var_dump(). Output a string representation of a variable
// var_export('Hello');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Post One'; ?></h1>
</body>
</html>


