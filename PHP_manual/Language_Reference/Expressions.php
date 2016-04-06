<?php
/**
 * Created by PhpStorm.
 * User: Mobarak
 * Date: 06-Apr-16
 * Time: 9:52 PM
 */
$a = 5;
var_dump($a);

$b = $a;

var_dump($b);

function c(){
    return 5;
}

var_dump(c());



$a*=$b;
$b*=7;
var_dump($a); // 25
var_dump($b); // 35