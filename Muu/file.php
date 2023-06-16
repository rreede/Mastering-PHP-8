<?php

// Type hinting in functions

function item(): int|float {
    return 1;
}

function foo($x, $y) {
    return $x * $y;
}



echo foo(5,10);



?>