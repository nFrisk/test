<?php
  $num_one = 1;
  $num_two = 2;
  $num_three = 3;

/*
  // Testing if we have a string or a variable
  var_dump( $num_one );
  var_dump( 1 );
  var_dump( "1" );

  var_dump( $num_one + $num_two - $num_three ); 
*/

// Floats
$distance_home = 1.2;
$distance_work = 2.5;

var_dump($distance_home + $distance_work + $num_three + .3);

// Operators
$a = 5;
$b = 10;

var_dump($a * $b);
var_dump($a / $b);


// Incremental operator
$a = $a + 1;
var_dump($a);
$a++; 
var_dump($a);
$a--;
var_dump($a);

$a += 5;
var_dump($a);

 ?>
