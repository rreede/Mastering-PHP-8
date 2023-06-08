<?php

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
*/
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

?>