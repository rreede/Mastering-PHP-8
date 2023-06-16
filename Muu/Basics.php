<?php
/*
// Echo simply displays value

echo "Hello World!";

// Print also has value of 1 embedded in it, can be used inside expressions

print "Hello World!";

// A way to display quotes within quotes 

echo 'Rene\'s invoice';

// Variables can start with letters on underscore only $this is also not allowed

$name = "Rene";

echo $name;

$x = 1;


$y = &$x;
 // Example of value by reference not value

$x = 3;

echo $y;

$firstName = "Rene";

// You can display variable values inside doublequotes, not single quotes.

echo "Hello $firstName";

// Concatenating (Adding to strings together)


echo "Hello" . $firstName;

// Constant variables (Not Changeable later)
/*

// Define can be used inside control structures

define("STATUS_PAID","paid");

echo STATUS_PAID;

const STATUS_PAID = "paid";

echo STATUS_PAID;

echo PHP_VERSION;

// Variable variables

$foo = "bar";

$$foo = "baz";

// Typecasting

// Boolean (true = 1, false = 0)

$completed = true;

// int

$score = 73;

// float
$price = 0.99;

// string

$words = "string";

echo gettype($price);
var_dump($score);

// Arrays

$companies = ["Apple", "Microsoft"];

// Printing arrays

print_r($companies);

function sum(int $a, int $b) {
    return $a + $b;
}

echo sum(4,3);

$x = (int)"5";

var_dump($x);

// Booleans

$isComplete = true;

is_bool($isComplete);

if($isComplete) {
    // do something
} else {
    // Do something else
}

# Integers

# Cast value into integer

$x = (int) null;

var_dump(is_int($x));

*/
# Strings


$name1 = "Django";

echo $name1[2];


// Heredoc

$text = <<<TEXT

Line 1

Line 2

TEXT;

# Arrays

$array = ["Dogs", "Cats", "Turtles"];

echo $array[0];


# Associative Arrays

$programmingLanguages = [

    'php' => '8.0',
    'python' => '3.9'

];

echo array_pop($programmingLanguages);

# print_r($array);

# Delete array

unset($array);


$x = 5;

echo $x++;

# Control Structures if/else

$score = 95;

if($score >= 90) {
    echo "A";
} else {
    echo "B";
}

// While Loop

$i = 0;

while($i >= 15) {
    echo $i++;
}

$pets = ["Cats", "Dogs", "Turtles"];

foreach($pets as $key => $pet) {
    echo $key . ':' . $pet . '<br/>';
}

# Match

$paymentStatus = 3;

$paymentStatusDisplay = match($paymentStatus) {
    1 => print 'Paid',
    2 => print 'Not Paid',
    3 => print 'Soon to be paid',
    default => print 'Default message',
};


echo $paymentStatusDisplay;

$amount = 24;

switch($amount) {
    case 24:
        echo "hi";
        break;
        default:
        echo "Hi";
}

function sum(int $x, int $y) {
    return $x + $y;
}


include ("file.php");



function multiply(int $x, int $y) {
    return $x * $y;
}

// Allows to use input in any order

$multiply = multiply(y: 5, x: 3);


echo $multiply;

// Variable functions

# if (is_callable($x));

// Mapping arrays

$array = [1,2,3,4,5,6,7];

array_map(function($number) {

    return $number * $number;

},$array);


// DATES

# echo time();

#echo date("m/d/y g:ia");


// Error Reporting

/*

trigger_error('Example error', E_USER_ERROR);

echo 1;

error_reporting(E_ALL & E_WARNING)


*/

# Working with Files

$dir = scandir(__DIR__);

var_dump($dir);

#mkdir('foo');

rmdir('foo');

if (file_exists('foo.txt')) {
    echo filesize('foo.txt');
}

// File_put_contents and file_get_contents



?>