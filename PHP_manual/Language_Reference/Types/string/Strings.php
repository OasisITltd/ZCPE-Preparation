<?php
/**
 * Created by PhpStorm.
 * User: Mobarak
 * Date: 17-Apr-16
 * Time: 11:09 PM
 */

function html($a,$b ){
    echo "<$b> $a </$b>";
}

$b = 'Learning about "String".';

html($b,"h1"); // <h1> Learning about "String".</h1>