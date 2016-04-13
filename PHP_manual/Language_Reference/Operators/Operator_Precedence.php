<h1>Example #1 Associativity</h1>
<?php
/**
 * Created by PhpStorm.
 * User: Mobarak
 * Date: 14-Apr-16
 * Time: 12:42 AM
 */
$a = 3*3%5; // 9%5 =4
echo $a;

$a = TRUE ? 0:1; var_dump($a);// 0
$a = TRUE ? 0:True; var_dump($a); // 0
$a = TRUE ? 0:True ? 1:2; var_dump($a); //2

// (TRUE ? 0: TRUE)? 1: 2 = 2;

$a = 1; $b = 2;
$a = $b += 3;
echo "<br> a= ". $a. " b = ". $b;


echo "<h1>Example #2 Undefined order of evaluation </h1>";

$a = 1;
$c =  $a + $a++;// 3
echo $c;


