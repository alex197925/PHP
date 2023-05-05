<?php 
// Simple Array
$numbers = [1,32,45,567,9879];
$fruits = array('apple', 'orange', 'pear');


// echo $fruits[1];
// var_dump($numbers);
// print_r($numbers);
// print_r($fruits);


// Associative Array
// $colors = [
//     1 => 'red',
//     2 => 'blue',
//     3 => 'green'
// ];

// echo $colors[1];

$hex = [
    'red' => '#f00',
    'blue' => '#fee',
    'green' => '#h55'
];

// echo $hex['red'];


$person = [
    'first_name' => 'Brad',
    'last_name' => 'Cooper',
    'email' => 'brad@gmail.com',
    'age' => 34
];

// echo $person['email'];

$people = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Cooper',
        'email' => 'brad@gmail.com'
       
    ],
    [
        'first_name' => 'Alex',
        'last_name' => 'Hook',
        'email' => 'alex@gmail.com'
        
    ],
    [
        'first_name' => 'Pit',
        'last_name' => 'Paterson',
        'email' => 'pit@gmail.com'
        
    ]

    ];

    var_dump(json_encode($people)); // Translate to the json format

   // echo $people[1]['email'];
?>